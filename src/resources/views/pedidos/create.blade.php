@extends('layout')

@section('content')

    <h1>Montar pedido </h1>
    <form action="{{route('pedido.store', $customer->id)}}" method="POST">
        {{@csrf_field()}}
        <input type="hidden" name="customer_id" value="{{$customer->id}}">
        <table class="table table-bordered table-sm table-hover">
            <thead>
            <tr>
                <th width="20px">#</th>
                <th scope="col" width="60px"></th>
                <th scope="col">Produto</th>
                <th scope="col" width="70px">Preço</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $p)
                <tr>
                    <td>
                        <input type="checkbox" name="product_id[]" value="{{$p->id}}">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="product[quantity][]" value="0">
                        <input class="form-control" type="hidden" name="product[id][]" value="{{$p->id}}">
                    </td>
                    <td>
{{--                        <input type="hidden" name="product_id" value="{{$p->id}}">--}}
                        <input class="form-control" type="text" value="{{$p->name}}"disabled>
                    </td>
                    <td>
                        <input class="form-control" type="number" name="price" value="{{$p->price}}" disabled>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Finalizar</button>
    </form>
    @endsection
