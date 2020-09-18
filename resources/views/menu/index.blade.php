@extends('layouts.app')

@section('content')
    <div class="wrapper menu-body pb-5">

        <h1 class="text-center pt-5 menu-h1">
            Menu .
        </h1>

        <div class="container px-5 py-3">

            <div class="menu-items">
                <div class="row mt-3 justify-content-md-center">

                    <div class="col-4">
                        <table class="table table-responsive px-4">
                            <thead>
                                <th scope="col" colspan="2">🍱 Toppings</th>
                            </thead>
                            <tbody>
                                {{-- @for($i = 0; $i < count($toppings); $i+=2)
                                    <tr>
                                        <td>{{ $toppings[$i]->type }}</td>
                                        <td>{{ $toppings[$i+1]->type }}</td>
                                    </tr>
                                @endfor --}}
                            </tbody>
                        </table>
                    </div>

                    <div class="col-4">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th scope="col">🍕 Pizzas</th>
                                <th scope="col">Small</th>
                                <th scope="col">Large</th>
                            </thead>
                            <tbody>
                                {{-- @for($i = 0; $i < count($pizzas); $i++)
                                    <tr>
                                        @if($pizzas[$i]->size == 'Small')
                                            <td>{{ $pizzas[$i]->type }}</td>
                                            <td>${{ $pizzas[$i]->price }}</td>
                                            @if($pizzas[++$i]->size == 'Large')
                                            <td>${{ $pizzas[$i]->price }}</td>
                                            @endif
                                        @endif
                                    </tr>
                                @endfor --}}
                            </tbody>
                        </table>
                    </div>

                    <div class="col-4">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th scope="col">🍔 Subs</th>
                                <th scope="col">Small</th>
                                <th scope="col">Large</th>
                            </thead>
                            <tbody>
                                {{-- @for($i = 0; $i < count($subs); $i++)
                                    <tr>
                                        @if($subs[$i]->size == 'Small')
                                            <td>{{ $subs[$i]->type }}</td>
                                            <td>${{ $subs[$i]->price }}</td>
                                            @if($subs[++$i]->size == 'Large')
                                            <td>${{ $subs[$i]->price }}</td>
                                            @endif
                                        @endif
                                    </tr>
                                @endfor --}}
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <p class="text-center">
                    <b>
                    🤘 All pizzas will have a main topping(s) and upto 5 more of your choice ~ Except for The Deep End... Go nuts and put upto 10 toppings!
                    </b>
                </p>
                <br>

                <div class="row mt-3 justify-content-md-center">

                    <div class="col-3">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th scope="col" colspan="2">🥗 Salads</th>
                            </thead>
                            <tbody>
                                {{-- @foreach($salads as $salad)
                                    <tr>
                                        <td>{{ $salad->type }}</td>
                                        <td>${{ $salad->price }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                    <div class="col-3">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th scope="col" colspan="2">🍛 Dinner Platters</th>
                            </thead>
                            <tbody>
                                {{-- @foreach($dinnerPlatters as $dp)
                                    <tr>
                                        <td>{{ $dp->type }}</td>
                                        <td>${{ $dp->price }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                    <div class="col-3">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th scope="col" colspan="2">🍝 Pasta</th>
                            </thead>
                            <tbody>
                                {{-- @foreach($pastas as $pasta)
                                    <tr>
                                        <td>{{ $pasta->type }}</td>
                                        <td>${{ $pasta->price }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
