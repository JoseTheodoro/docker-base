@extends('layout')

@section('content')
    <h1>Pedido numero {{$order->id}}</h1>

    <h2>Cliente {{$customer->name}}</h2>
    <h3>Endereço de entrega {{$customer->address}}</h3>

    <br><br><br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Cod Item.</th>
            <th scope="col">Item</th>
            <th scope="col">Valor Unit.</th>
            <th scope="col">Qtde.</th>
            <th scope="col">Sub.Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->pivot->quantity}}</td>
                <?php $total += $p->price * $p->pivot->quantity ?>
                <td>{{$p->price * $p->pivot->quantity}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="text-right"><b>TOTAL: </b></td>
            <td>R$ {{$total}}</td>
        </tr>
        </tfoot>
    @endsection

        <a class="btn btn-primary" href="/">Voltar</a>
