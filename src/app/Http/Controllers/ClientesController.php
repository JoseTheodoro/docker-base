<?php


namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.cadastro');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route('clientes');
    }

    public function show($id)
    {
        $cliente = Cliente::where('id', $id)->orWhere('telefone', $id)->first();
        return view('clientes.show', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::where('id', $id)->orWhere('telefone', $id)->first();

        $cliente->update($request->all());
        return view('clientes.show', compact('cliente'));
    }

    public function busca(Request $request)
    {
        $id = $request->get('id');
        $cliente = Cliente::where('telefone', $id)->first();
        if(null == $cliente) {
            return redirect('clientes');
        }
        return view('clientes.show', compact('cliente'));
    }

}
