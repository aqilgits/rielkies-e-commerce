@extends('master')
@section('content')
    <div class="loginContainer">
        <div class="loginWrapper">
            <form action="login" method="post" style="width: 50%">
                @csrf
                <p style="color: red;">{{ $message }}</p>
                <div class="mb-3">
                    <label for="email" class="form-label"><Strong>Email address</Strong></label>
                    <input type="email" name="email" class="form-control bg-transparent" id="email"
                        aria-describedby="emailHelp" style="border: none; border-bottom: solid 1px black;">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><Strong>Password</Strong></label>
                    <input type="password" name="password" class="form-control bg-transparent" id="password"
                        style="border: none; border-bottom: solid 1px black">
                </div>
                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn"
                        style="background-color: #951f2d; width:40%; color:white">Login</button>
                    <a href="#" class="btn" style="color: #951f2d; width:40%;">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
