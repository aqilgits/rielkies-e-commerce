@php
use App\Http\Livewire\Product;
$total = 0;
if (Session::has('user')) {
    $count = Product::cartItem();
    foreach ($count as $quantity) {
        $total = $total + (int)$quantity['quantity'];
    }
}

@endphp
@if (!Session::has('user'))
    <div class="registerBar text-light">
        <a href="/login" class="btn searchIcon text-light">
            <i class="fas fa-shopping-cart">
                ({{ $total }})
            </i>
        </a>
        <a class="registerLink" href="/login">Login</a>
        <i class="fas fa-sign-in-alt "></i>
    </div>
@else
    {{-- profile --}}
    <div class="registerBar text-light">
        <a href="/cartlist" class="btn searchIcon text-light">
            <i class="fas fa-shopping-cart">
                ({{ $total }})
            </i>
        </a>
        <div class="dropdown d-flex align-items-center" id="profile">
            <a class="btn dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle fa-1x"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                    <p class="dropdown-item">{{ Session::get('user')['name'] }}</p>
                </li>
                <li><a class="dropdown-item" href="/">Profile</a></li>
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
            </ul>
        </div>
    </div>
@endif

<div class="header-container">
    <div class="headerWrapper">
        <div class="headerMenu">
            <a class='headerLink' href="/"><strong>Home</strong></a>
            <a class='headerLink' href="/product"><strong>Product</strong></a>
            <a class='headerLink' href="#"><strong>Promotion</strong></a>
        </div>
        <div class="headerLogo" id="logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}"></a>
        </div>
        {{-- search --}}
        <div style="display: flex">
            <form action="/search" name="searchProduct" class="d-flex align-items-center">
                <div class="search">
                    <div class="searchBar">
                        <input type="text" name="search" placeholder="search...">
                    </div>
                    <button class="btn searchIcon text-light" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="burgerIcon text-light" onClick="sidebarOpen()">
            <i class="fas fa-bars fa-2x"></i>
        </div>
    </div>
</div>
