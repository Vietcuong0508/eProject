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
    <h3 class="col-12 p-3 text-white bg-success text-center">Danh mục sản phẩm</h3>
    <div class="container " style="font-family: Lemonada, sans-serif">
        <div class="row bg-light">
            @foreach($list as $obj)
                <div class="col-2 " style="margin: 19px">
                    <div class="card">
                        <img class="" style="margin: 14px" src="{{$obj->thumbnail}}" alt="Card image cap" width="130px" height="130px">
                        <div class="text-center">
                            <div class="border-top">
                                <div class="card-title px-2">{{$obj->name}}</div>
                            </div>
                            <div class="row card-title">
                                <div class="col-12">
                                    <p class="card-text">{{$obj->price}}00 đồng</p>
                                </div>
                                <div class="col-12">
                                    <a href="/shopping/add?productId={{$obj->id}}&productQuantity=1">
                                        <button class="btn text-success border-success">Add to cart <i class="fa fa-shopping-cart"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-12 text-center"><a class=" my-2 p-2 btn text-success border border-success" href="/home/product">Xem thêm -></a></div>
    <h3 class="col-12 py-4 bg-success"></h3>
@endsection

