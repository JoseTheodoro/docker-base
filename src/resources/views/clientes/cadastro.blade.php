@extends('layout')

    @section('content')

    <h1>Cadastro de Clientes</h1>


    <form action="{{route('clientes.store')}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('clientes')}}" class="btn btn-danger">Voltar</a>
    </form>






    @endsection
