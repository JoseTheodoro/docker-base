<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreClienteRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $clientes = Customer::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.cadastro');
    }

    public function store(StoreClienteRequest $request)
    {
        $cliente = Customer::create($request->all());

        return redirect()->route('clientes.edit', $cliente->id);
    }

    public function show($id)
    {
        $cliente = Customer::where('id', $id)->orWhere('phone', $id)->first();
        return view('clientes.show', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Customer::where('id', $id)->orWhere('phone', $id)->first();

        $cliente->update($request->all());
        return view('clientes.show', compact('cliente'));
    }

    public function busca(Request $request)
    {
        $id = $request->get('id');
        $cliente = Customer::where('phone', $id)->first();
        if(null == $cliente) {
            return redirect('clientes');
        }
        return view('clientes.show', compact('cliente'));
    }

}
