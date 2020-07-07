@extends('layouts.app')


<!-- Login page for the user, decided to go the route of each session the user logs in for, the cart will be created, otherwise the cart will not exist or will have the table cleared 
upon session logout. -->

<!-- UPDATE, I couldn't figure out how to clear the cart upon session clear, so I have left it as it is.  Cart will have to be cleared manually if you wish to change the cart table -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <button><a href="/e_commerce_site/public/" class="nav-link {{ Request::path() === '/e_commerce_site/public/' ? active : '' }}">Home</a></li></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
