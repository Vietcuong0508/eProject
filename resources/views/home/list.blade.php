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
    <div class="container">
        <form action="" id="filter_form">
            <select class="selectpicker" id="price" name="price">
                <option selected disabled hidden>Lọc theo giá</option>
                <option value="1" {{$price && $price == 1 ? 'selected':''}}>0-20.000 VNĐ</option>
                <option value="2" {{$price && $price == 2 ? 'selected':''}}>20.000-50.000 VNĐ</option>
                <option value="3" {{$price && $price == 3 ? 'selected':''}}>50.000-100.000 VNĐ</option>
                <option value="4" {{$price && $price == 4 ? 'selected':''}}>100.000-500.000 VNĐ</option>
            </select>
            <select class="selectpicker" id="" name="">
                <option selected disabled hidden>Lọc danh mục</option>
                <option value="1">Rau</option>
                <option value="2">Củ</option>
            </select>
            <select class="selectpicker" id="gardenName" name="gardenName">
                <option selected disabled hidden>Lọc theo nhà vườn</option>
                <option value="1" {{$gardenName && $gardenName == 1 ? 'selected':''}}>Trang trại rau hữu cơ Organik Đà Lạt</option>
                <option value="2" {{$gardenName && $gardenName == 2 ? 'selected':''}}>Trang trại hữu cơ BIOPHAP farm</option>
                <option value="3" {{$gardenName && $gardenName == 3 ? 'selected':''}}>Nông trại hữu cơ Viễn Phú</option>
                <option value="4" {{$gardenName && $gardenName == 4 ? 'selected':''}}>Công ty cổ phần Deli Fresh</option>
                <option value="4" {{$gardenName && $gardenName == 5 ? 'selected':''}}>Công Ty TNHH Lion Golden</option>
            </select>

            <input type="text" name="search" id="search" placeholder="search">
        </form>
    </div>
    <div class="container " style="font-family: Lemonada, sans-serif">
        <div class="row bg-light">
            @foreach($list as $obj)
                <div class="col-3 my-3">
                    <div class="card">
                        <img class="" style="margin: 14px" src="{{$obj->thumbnail}}" alt="Card image cap" width="226px"
                             height="190px">
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
                                        <a href="/home/productDetail/{{$obj->id}}">
                                            <button class="btn text-success border-success">Chi tiết</button>
                                        </a>
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
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#price').change(function () {
                $('#filter_form').submit()
            })
            $('#gardenName').change(function () {
                $('#filter_form').submit()
            })
        })
    </script>
@endsection

