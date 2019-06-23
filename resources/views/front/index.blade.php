@extends('front.layouts.master')

@section('content')
<head>

</head>
<div class="row text-center">

<header class="container">
        
        <div class="body">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
             </ol>
            
            <div class="carousel-inner" role="listbox"> 
                <div class="carousel-item active">
            </div>
                <div id="target" class="carousel-item"></div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
  </header>
    @foreach($products as $product)

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <div class="imge" style="background-image: url('{{asset('/uploads') . '/' . $product->image }}');width: 100%;
    min-height: 150px;
    background-position: center;
        background-size: contain;
    background-repeat: no-repeat;"><img class="card-img-top" src="" alt=""></div>
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">
                    {{ $product->description }}
            </p>
            </div>
            <div class="card-footer"> 
                <strong>{{$product->price}}</strong> &nbsp;
                <a href="#" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                    Cart</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!-- /.row -->

@endsection