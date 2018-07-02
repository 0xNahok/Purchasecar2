@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12 col-sm-12 col-md-12">
            <div class="jumbotron">
                <center>
                    <h1 class="display-4">Hello, {{Auth::user()->firstname}}</h1>
                    <p class="lead">Welcome to Your dashboard</p>
                    <hr class="my-4">
                    <p>In here you can check your Cart and your history transaction.</p>
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/dashboard/cart" role="button">Cart</a>
                    <a class="btn btn-primary btn-lg" href="/dashboard/history" role="button">History Transaction</a>
                    </p>
                </center>
                
            </div>
        </div>
        <div class="col"></div>
        
    </div>
</div>


@endsection