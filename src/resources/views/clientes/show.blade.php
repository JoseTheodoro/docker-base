@extends('layout')

    @section('content')

    <h1>{{$cliente->name}} </h1>
    <small>{{$cliente->address}}</small>

    <hr>
    <form action="{{route('clientes.update', $cliente->id)}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="name" autocomplete="off" value="{{$cliente->name}}">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="phone" autocomplete="off"
                   value="{{$cliente->phone}}">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="address" autocomplete="off"
                   value="{{$cliente->address}}">
        </div>

        <div class="form-group">
            <label for="obs">Observação</label>
            <textarea id="obs" class="form-control" name="additional">{{$cliente->additional}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('clientes')}}" class="btn btn-danger">Voltar</a>
        <a href="{{route('pedido.create', $cliente->id)}}" class="float-right btn btn-success">REALIZAR PEDIDO</a>
    </form>






    @endsection
