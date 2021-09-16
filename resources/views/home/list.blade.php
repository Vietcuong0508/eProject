@extends('layout.layout')
@section('content')
    <div class="row wrapper">
        <div class="carousel-item active">
            <img src="img/2.jpg" width="100%">
        </div>
    </div>
    <section class="section bg-light">
        <div class="row" style="padding: 0 100px">
            <div class="p-4">
                <div class="col-inner">
                    <div class="d-flex">
                        <div class="icon-box-img" style="width: 70px">
                            <div class="icon">
                                <div class="icon-inner ">
                                    <img width="74" height="74"
                                         src="/img/icon-1.png"></div>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h5><b>GIAO HÀNG</b></h5>
                            <p><span>Tận nơi - Thanh toán tại nhà</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="col-inner">
                    <div class="d-flex">
                        <div class="icon-box-img" style="width: 70px">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img width="74" height="74"
                                         src="/img/icon-2.png"></div>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h5><b>SẢN PHẨM</b></h5>
                            <p><span>Cam kết 100% xuất xứ rõ ràng</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="col-inner">
                    <div class="d-flex">
                        <div class="icon-box-img" style="width: 70px">
                            <div class="icon">
                                <div class="icon-inner">
                                    <img width="74" height="74"
                                         src="/img/icon-4.png"></div>
                            </div>
                        </div>
                        <div class="ml-3">
                            <h5><b>HỖ TRỢ</b></h5>
                            <p><span>Hotline : 0817.184.221</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h3 class="col-12 p-3 text-white bg-success text-center">Danh mục sản phẩm</h3>
    <div class="container " style="font-family: Lemonada, sans-serif">
        <div class="row bg-light">
            @foreach($list as $obj)
                <div class="col-2 " style="margin: 19px">
                    <div class="card">
                        <img class="" style="margin: 14px" src="{{$obj->thumbnail}}" alt="Card image cap" width="130px"
                             height="130px">
                        <div class="text-center">
                            <div class="border-top">
                                <div class="card-title px-2">{{$obj->name}}</div>
                            </div>
                            <div class="">
                                <div class="card-title px-2"><a href="">{{$obj->gardenName}}</a></div>
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
    <div class="col-12 text-center"><a class=" my-2 p-2 btn text-success border border-success" href="/home/product">Xem
            thêm -></a></div>
    <img class="my-4" src="/img/Capture2.PNG" style="height: 175px; width:100%">
@endsection

