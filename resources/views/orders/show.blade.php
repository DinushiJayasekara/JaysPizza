@extends('layouts.app')
@section('content')
    <h1>Order for {{ $order->order_user }}</h1>
    <p>Type - {{ $pizza->type }}</p>
    <p>Size - {{ $order->size }}</p>
    @if ($order->size == 'Small')
        <p>Total Price: - ${{ $pizza->price + (count($order->toppings) * 1.50) }}</p>
        <ul>
            <li>Pizza - ${{ $pizza->price }}</li>
            <li>Extra Toppings - ${{ count($order->toppings) * 1.50 }}</li>
        </ul>
    @else
        <p>Total Price: - ${{ $pizza->price + (count($order->toppings) * 1.50) + 10}}</p>
        <ul>
            <li>Pizza - ${{ $pizza->price + 10.00 }}</li>
            <li>Extra Toppings - ${{ count($order->toppings) * 1.50 }}</li>
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
    <a href="{{ route('orders') }}">Back To All Orders</a>
@endsection
