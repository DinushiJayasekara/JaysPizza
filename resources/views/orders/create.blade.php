@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center pb-3 menu-h1">
            <img src="/img/new_order.png" alt="New Order" width="70">
            Order A Pizza .
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark" style="background-color: #f6e1a0 !important;">
                    <div class="card-body">
                        <form class="mx-5" method="POST" action="{{ route('orders') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input name="name" class="form-control" id="name" type="text">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No:</label>
                                <input name="phone" class="form-control" id="phone" type="text">
                            </div>
                            <div class="form-group">
                                <label for="type">Choose Pizza Type:</label>
                                <select class="form-control" id="type" name="type">
                                    @foreach ($pizzas as $pizza)
                                        <option value="{{ $pizza->id }}">{{ $pizza->type }} (${{ $pizza->price }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="size">Choose Size:</label>
                                <select class="form-control" id="size" name="size">
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                                <small class="form-text text-muted">Extra $10.00 will be charged for large pizzas.</small>
                            </div>
                            <div class="form-group">
                                <label>Extra Toppings:</label>
                                <div class="form-check">
                                    @foreach ($toppings as $topping)
                                        <input type="checkbox" class="form-check-input" name="toppings[]"
                                            value="{{ $topping->type }}">
                                        <label class="form-check-label" for="toppings">{{ $topping->type }}</label>
                                        <br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger mt-3">Order Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
