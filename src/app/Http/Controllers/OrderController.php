<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id)
    {
        $customer = Customer::find($id);
        $products = Product::orderBy('name')->get();
        return view('pedidos.create')->with(compact('products', 'customer'));
    }

    public function view($id)
    {
        $order = Order::find($id);
        $customer = $order->customer;
        $products = $order->products()->get();
        $total = 0;
//        dd($products);
        return view('pedidos.view')->with(compact('order', 'customer', 'products', 'total'));
    }

    public function store(Request $request)
    {

        $product = collect($request->get('product'));
        $quanity = collect($product->get('quantity'));
        $product_ids = collect($product->get('id'));


        $filtreds = $quanity->filter(function($value){
            return $value > 0;
        });


//        $products = [];

        $products = $filtreds->map(function($value, $key) use ($product_ids) {
              return $products[] = [
                  'quantity' => $value,
                  'product_id' => $product_ids->get($key)
              ];
        });

        $cutomer_id = $request->get('customer_id');
        $order = Order::create(['customer_id'=>$cutomer_id]);

        if($order) {
            $products->each(function($product, $key) use ($order) {
                $order->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
            });
        }

        return redirect()->route('order.view', $order->id);
    }
}
