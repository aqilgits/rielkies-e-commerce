@extends('master')
@section('content')
    <div class="cartContainer">
        <div class="cartWrapper row">
            <div class="col-lg-12 d-flex justify-content-center">
                <h1>Cart</h1>
            </div>
            <div class="cartItem col-lg-12 d-flex justify-content-center">
                <div style="width: 70%;">
                    @foreach ($carts as $cart)
                        <div class="row" style="border-bottom: solid 1px grey;margin: 10px 0px">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-5" style="padding-bottom: 10px">
                                        <img src="{{ $cart->image }}" height="150rem">
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $cart->name }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex align-items-center">
                                <p>{{ $cart->price }}</p>
                            </div>
                            <div class="col-lg-2 d-flex align-items-center">
                                <p>{{ $cart->quantity }}</p>
                            </div>
                            <div class="col-lg-2 d-flex align-items-center">
                                <p>
                                    @php
                                        echo 'RM '.$cart->price * $cart->quantity
                                    @endphp 
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
