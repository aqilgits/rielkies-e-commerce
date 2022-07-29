@extends('master')
@section('content')
    <div class="slideContainer">
        <div class="slideWrapper">
            <div id="carouselTrending" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active ">
                        <img src="{{ asset('images/trending 1.jpg') }}" class="trendingImage">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/trending 2.jpg') }}" class="trendingImage">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/trending 3.jpg') }}" class="trendingImage">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTrending" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTrending" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="visiContainer d-flex justify-content-center">
        <div class="visiWrapper row">
            <div class="founderImage col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/founder.jpg') }}" height="300rem">
            </div>
            <div class="visiText col-lg-6 d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Visi Rielkies</h1>
                    </div>
                    <div class="col-lg-12">
                        <p style="text-align: justify; font-size: 1.3rem;">Rielkies merupakan jenama produk makanan keluaran
                            muslim bumiputra yan diyakini 100% halal.
                            Diasaskan oleh Aeril Zafrel, Rielkies berhasrat untuk menjadi jenama no 2 di Asean menjelang
                            tahun 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainProduct">
        <div class="mainWrapper">
            <div class="title">
                <h1>Produk Utama Rielkies</h1>
            </div>
            <div class="productItem">
                <div class="item1 row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center overflow-hidden"
                        style="height: 300px">
                        <img src="{{ asset('images/chocotub.jpg') }}" width="100%" height="200px"
                            style="object-fit: cover; max-width:300px; min-width: 300px;">
                    </div>
                    <div class="col-md-12" style="height: 200px; text-align: center;">
                        <h2>
                            Rielkies Chocotub
                        </h2>
                        <p>
                            Diperbuat dari Coklat Premium, Bijiran, Minyak Sayuran, Kranberri Kering dan Susu Lemak Penuh
                        </p>
                    </div>
                </div>
                <div class="item2 row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center overflow-hidden"
                        style="height: 300px">
                        <img src="{{ asset('images/cookies.jpg') }}" width="100%" height="200px"
                            style="object-fit: cover; max-width:300px; min-width: 300px;">
                    </div>
                    <div class="col-md-12" style="height: 200px; text-align: center;">
                        <h2>
                            Rielkies Red Velvet Cookies
                        </h2>
                        <p>
                            Diperbuat dari red velvet cookies yang disaluti coklat Rielkies dan ditabur dengan cranberries
                        </p>
                    </div>
                </div>
                <div class="item3 row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center overflow-hidden"
                        style="height: 300px">
                        <img src="{{ asset('images/kurma.jpg') }}" width="100%" height="200px"
                            style="object-fit: cover; max-width:300px; min-width: 300px;">
                    </div>
                    <div class="col-md-12" style="height: 200px; text-align: center;">
                        <h2>
                            Rielkies Kurma Ajwa
                        </h2>
                        <p>
                            Nikmati kurma nabi dengan cara berbeza iaitu bersama coklat Rielkies
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedbackContainer">
        <div class="feedbackWrapper">
            <div class="feedbackTitle d-flex justify-content-center">
                <h1>Feedback Rielkies</h1>
            </div>
            <div class="feedback d-flex justify-content-center">
                <div class="feedbackRow">
                    <div class="feedbackItem1">
                        <div style="height: 100px">
                            <p>Saya jenis tak makan coklat murah, tapi bila makan Rielkies saya tak boleh berhenti bermakna
                                coklat
                                Rielkies setanding coklat jenama antarabangsa</p>
                        </div>
                        <div class="credit">
                            <p>(Ibu Hanim)</p>
                        </div>
                    </div>
                    <div class="feedbackItem2">
                        <div style="height: 100px">
                            <p>Padu terukkk. Sekali cuba memang tak boleh stop</p>
                        </div>
                        <div class="credit">
                            <p>(Afiq)</p>
                        </div>
                    </div>
                    <div class="feedbackItem3">
                        <div style="height: 100px">
                            <p>Banyak dah brand buat chocojar ni. Tapi Rielkies punya paling Win! Rasa dia betul betul syahdu.
                                Coklat likat</p>
                        </div>
                        <div class="credit">
                            <p>(Nurul Ain)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
