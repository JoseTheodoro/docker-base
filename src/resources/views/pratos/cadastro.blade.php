@extends('layout')

    @section('content')

    <h1>Cadastro de Pratos</h1>


    <form action="{{route('pratos.store')}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('pratos')}}" class="btn btn-danger">Voltar</a>
    </form>






    @endsection
