@extends('master')
@section('content')
    <div class="detailContainer d-flex justify-content-center">
        <div class="detailWrapper">
            <div style="padding: 10px 0px;">
                <a href="/product" style="text-decoration: none; color:black; margin: 10px">
                    <i class="fas fa-arrow-left fa-2x"></i>
                </a>
            </div>
            <div class="row" >
                <div class="col-sm-6 d-flex justify-content-center overflow-hidden" >
                    <img src="{{ $detail['image'] }}" style="width:50%;">
                </div>
                <div class="col-sm-6">
                    <h1 style="font-size: 3rem">{{ $detail['name'] }}</h1>
                    <p style="font-size: 2rem"><strong>Harga: </strong>RM{{ $detail['price'] }}</p>
                    <p style="font-size: 1rem">{{ $detail['desc'] }}</p>

                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $detail['id'] }}">
                        <button type="submit" class="btn"
                            style="background-color: #951f2d; width:80%; height:45px; color:white; margin-bottom: 20px">
                            ADD TO CART</button>
                    </form>

                    <button type="submit" class="btn"
                        style="background-color: white; width:80%; height:45px; color:#951f2d; border: solid 1px #951f2d">PLACE
                        ORDER</button>
                </div>
            </div>
        </div>
    </div>
@endsection
