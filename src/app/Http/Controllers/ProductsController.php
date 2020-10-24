<?php


namespace App\Http\Controllers;

use App\Http\Requests\StorePratoRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $pratos = Product::all();
        return view('pratos.index', compact('pratos'));
    }

    public function create()
    {
        return view('pratos.cadastro');
    }

    public function store(StorePratoRequest $request)
    {
        Product::create($request->all());

        return redirect()->route('pratos');
    }

    public function show($id)
    {
        $prato = Product::find($id);
        return view('pratos.show', compact('prato'));
    }

    public function update(Request $request, $id)
    {
        $prato = Product::find($id);

        $prato->update($request->all());
        return view('pratos.show', compact('prato'));
    }

}
