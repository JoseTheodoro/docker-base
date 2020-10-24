@extends('layout')

    @section('content')

    <h1>Cadastro de Clientes</h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{route('clientes.store')}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="phone" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="address" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="obs">Observação</label>
            <textarea id="obs" class="form-control" name="additional"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('clientes')}}" class="btn btn-danger">Voltar</a>
    </form>






    @endsection
