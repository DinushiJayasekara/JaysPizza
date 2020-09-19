@extends('layouts.app')

@section('content')
    <div class="menu-body pb-5">

        
        <div class="container px-5 mb-5 py-5">
            
            <div class="menu-items">
                <h1 class="text-center pt-4 menu-h1">
                    Menu .
                </h1>
                <div class="row mt-3 justify-content-md-center">

                    <div class="col-4">
                        <table class="table table-responsive table-hover px-4 pt-5" style="color: #242323;">
                            <thead>
                                <th scope="col" colspan="2">🍱 Toppings</th>
                            </thead>
                            <tbody>
                                @foreach ($toppings as $topping)
                                    <tr>
                                        <td>{{ $topping->type }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-4">
                        <table class="table table-responsive table-hover pt-5" style="color: #242323;">
                            <thead>
                                <th scope="col">🍕 Pizzas</th>
                                <th scope="col">Price</th>
                            </thead>
                            <tbody>
                                @foreach ($pizzas as $pizza)
                                    <tr>
                                        <td>{{ $pizza->type }}</td>
                                        <td>${{ $pizza->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <p class="text-center">
                    <b>
                    💰 $1.50 will be added for each extra topping on your pizza.
                    </b>
                </p>
                <br>
            </div>

        </div>

    </div>
@endsection
