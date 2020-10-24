@extends('layout')

    @section('content')

    <h1>Cadastro de Produtos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{route('pratos.store')}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="price" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('pratos')}}" class="btn btn-danger">Voltar</a>
    </form>






    @endsection
