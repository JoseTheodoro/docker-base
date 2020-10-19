@extends('layout')

@section('content')

    <h2>Pratos</h2>

    <a href="{{route('pratos.create')}}" class="btn btn-primary">Novo</a>
    <br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">

            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($pratos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->preco}}</td>
            <td>
                <a href="{{route('pratos.edit', $p->id)}}">Editar</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>







@endsection
