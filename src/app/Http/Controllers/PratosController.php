<?php


namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratosController extends Controller
{

    public function index()
    {
        $pratos = Prato::all();
        return view('pratos.index', compact('pratos'));
    }

    public function create()
    {
        return view('pratos.cadastro');
    }

    public function store(Request $request)
    {
        Prato::create($request->all());

        return redirect()->route('pratos');
    }

    public function show($id)
    {
        $prato = Prato::find($id);
        return view('pratos.show', compact('prato'));
    }

    public function update(Request $request, $id)
    {
        $prato = Prato::find($id);

        $prato->update($request->all());
        return view('pratos.show', compact('prato'));
    }

}
