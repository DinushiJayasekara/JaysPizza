@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center pt-5 menu-h1">
            All Orders .
        </h1>
        <div class="list-group mt-4 px-5 justify-content-center">
            @foreach ($orders as $order)
                <a href="{{ route('orders.show', $order->id) }}"
                    class="list-group-item list-group-item-action list-group-item-warning">
                    <img src="/img/order.png" alt="Order" width="50" class="mr-2">
                    {{ $order->order_user }}
                </a>
                <br>
            @endforeach
        </div>
    </div>

@endsection
