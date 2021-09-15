@extends('layout.layout')
@section('content')
    <div class="wrapper">
        <h3 class="col-12 p-3 text-white bg-success text-center">Danh muc san pham</h3>
        <div class="container " style="font-family: Lemonada, sans-serif">
            <div class="row bg-light">
                @foreach($list as $obj)
                    <div class="col-2 " style="margin: 19px">
                        <div class="card">
                            <img class="" style="margin: 14px" src="{{$obj->thumbnail}}" alt="Card image cap"
                                 width="130px" height="130px">
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
                                            <button class="btn text-success border-success">Add to cart <i
                                                    class="fa fa-shopping-cart"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12 text-center"><a class=" my-2 p-2 btn btn-success" href="">Xem them -></a></div>
        <h3 class="col-12 py-4 bg-success"></h3>
    </div>
@endsection

