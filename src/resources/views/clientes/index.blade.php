@extends('layout')

@section('content')

    <h2>Clientes</h2>

    <a href="{{route('clientes.create')}}" class="btn btn-primary">Novo</a>
    <br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">

            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $c)
        <tr>
            <td>{{$c->nome}}</td>
            <td>{{$c->telefone}}</td>
            <td>
                <a href="{{route('clientes.edit', $c->id)}}">Editar</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>







@endsection
