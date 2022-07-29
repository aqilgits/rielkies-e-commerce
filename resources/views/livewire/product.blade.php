@extends('master')
@section('content')
    <div class="productContainer">
        <div class="d-flex justify-content-center">
            <h1>Product</h1>
        </div>
        <div class="d-flex justify-content-center">
            <div class="productWrapper">
                @foreach ($products as $product)
                    <a href="detail/{{ $product['id'] }}" class="productItems">
                        <div class="py-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{ $product['image'] }}" height="200rem">
                            </div>
                            <div class="text-center mt-2"
                                style="width: 100%; border-bottom:solid 1px black; border-top:solid 1px black">
                                <h3><strong>{{ $product['name'] }}</strong></h3>
                            </div>
                            <div>
                                <p><strong>Harga: </strong>RM{{ $product['price'] }}</p>
                            </div>
                            <div>
                                <p><strong>Jenis: </strong>{{ $product['category'] }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
@endsection
