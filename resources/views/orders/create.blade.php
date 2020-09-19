@extends('layouts.app')

@section('content')
    <div class="container m-5">
        <h1>Order a New Pizza</h1>
        <form class="m-5" method="POST" action="{{ route('orders') }}">
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
                        <option value="{{ $loop->iteration }}">{{ $pizza->type }}   (${{ $pizza->price }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="size">Choose Pizza Size:</label>
                <select class="form-control" id="size" name="size">
                    <option value="Small">Small</option>
                    <option value="Large">Large</option>
                </select>
            </div>
            <div class="form-group">
                <label>Extra Toppings:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="toppings[]" value="Mushrooms">
                    <label class="form-check-label" for="toppings">Mushrooms</label>
                    <br>
                    <input type="checkbox" class="form-check-input" name="toppings[]" value="Sausage">
                    <label class="form-check-label" for="toppings">Sausage</label>
                    <br>
                    <input type="checkbox" class="form-check-input" name="toppings[]" value="Olives">
                    <label class="form-check-label" for="toppings">Olives</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning mt-3">Submit</button>
            </div>
        </form>
    </div>
@endsection
