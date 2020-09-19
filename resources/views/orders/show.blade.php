@extends('layouts.app')
@section('content')

    <div class="jumbotron m-5">
        <h1 class="display-4">
            Order for {{ $order->order_user }}
        </h1>
        <p class="lead">Pizza Type: <b>{{ $pizza->type }}</b></p>
        <p class="lead">Size: <b>{{ $order->size }}</b></p>
        @if ($order->size == 'Small')
            <p class="lead">Total Price: <b>${{ $pizza->price + count($order->toppings) * 1.5 }}</b></p>
        @else
            <p class="lead">Total Price: <b>${{ $pizza->price + count($order->toppings) * 1.5 + 10 }}</b></p>
        @endif
        @if ($order->size == 'Small')
        <ul>
            <li>Pizza: ${{ $pizza->price }}</li>
            <small class="form-text text-muted">$10.00 will be charged for large pizzas.</small>
            <br>
            <li>Extra Toppings: ${{ count($order->toppings) * 1.5 }}</li>
            <ul>
                @foreach ($order->toppings as $topping)
                <li>{{ $topping }}</li>
                @endforeach
            </ul>
            <small class="form-text text-muted">$1.50 will be charged for each extra topping.</small>
        </ul>
        @else
        <ul>
            <li>Pizza: ${{ $pizza->price}} + $10.00</li>
            <small class="form-text text-muted">$10.00 will be charged for large pizzas.</small>
            <br>
            <li>Extra Toppings: ${{ count($order->toppings) * 1.5 }}</li>
            <ul>
                @foreach ($order->toppings as $topping)
                <li>{{ $topping }}</li>
                @endforeach
            </ul>
            <small class="form-text text-muted">$1.50 will be charged for each extra topping.</small>
        </ul>
        @endif
        <p class="lead">Contact {{ $order->order_user_phone }}</p>
        <hr class="my-4">
        <p class="lead mt-3">
        <form action="/orders/{{ $order->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mb-3">Complete Order</button>
            <br>
            <a href="{{ route('orders') }}">Back To All Orders</a>
        </form>
        </p>
    </div>

    {{-- <h1>Order for {{ $order->order_user }}</h1>
    <p>Type - {{ $pizza->type }}</p>
    <p>Size - {{ $order->size }}</p>
    @if ($order->size == 'Small')
        <p>Total Price: - ${{ $pizza->price + count($order->toppings) * 1.5 }}</p>
        <ul>
            <li>Pizza - ${{ $pizza->price }}</li>
            <li>Extra Toppings - ${{ count($order->toppings) * 1.5 }}</li>
        </ul>
    @else
        <p>Total Price: - ${{ $pizza->price + count($order->toppings) * 1.5 + 10 }}</p>
        <ul>
            <li>Pizza - ${{ $pizza->price + 10.0 }}</li>
            <li>Extra Toppings - ${{ count($order->toppings) * 1.5 }}</li>
        </ul>
    @endif
    <p>Extra Toppings:</p>
    <ul>
        @foreach ($order->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/orders/{{ $order->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
            Complete Order
        </button>
    </form>
    <br>
    <a href="{{ route('orders') }}">Back To All Orders</a> --}}
@endsection
