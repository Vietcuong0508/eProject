@extends('layout.layout')
@section('content')
    <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/2.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="img/5.png" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="img/1.jpg" alt="New York">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="row">
        @foreach($list as $obj)
            <div class="col-3 p-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$obj->thumbnail}}" alt="Card image cap" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">{{$obj->name}}</h5>
                    </div>
                    <div>
                        <h6 class="card-title">{{$obj->weight}}</h6>
                    </div>
                    <div class="row card-title">
                        <div class="col-6">
                            <p class="card-text">{{$obj->price}}.000 đồng</p>
                        </div>
                        <div class="col-6">
                            <a href="/shopping/add?productId={{$obj->id}}&productQuantity=1">
                                <button class="btn btn-primary">Add to cart  <i class="fa fa-shopping-cart"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
