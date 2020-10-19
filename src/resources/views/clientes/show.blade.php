@extends('layout')

    @section('content')

    <h1>{{$cliente->nome}} </h1>
    <small>{{$cliente->endereco}}</small>

    <hr>
    <form action="{{route('clientes.update', $cliente->id)}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" value="{{$cliente->nome}}">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" autocomplete="off" value="{{$cliente->telefone}}">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" autocomplete="off" value="{{$cliente->endereco}}">
        </div>
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" autocomplete="off" value="{{$cliente->complemento}}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('clientes')}}" class="btn btn-danger">Voltar</a>
    </form>






    @endsection
