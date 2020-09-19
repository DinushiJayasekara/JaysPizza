@extends('layouts.app')
@section('content')
    
    @foreach ($orders as $order)
    <a href="{{ route('orders.show', $order->id) }}">
        {{ $order->order_user }}'s Order {{ $order->id }}
    </a>
        <br>
    @endforeach

@endsection