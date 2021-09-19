@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="wrapper" style="background-color: #eae9e9">
            <section class="mb-5">

                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <div class="row product-gallery mx-1">

                                <div class="col-12 mb-0">
                                    <figure class="view overlay rounded z-depth-1 main-img">
                                        <a href="{{$news->thumbnail}}"
                                           data-size="710x823">
                                            <img src="{{$news->thumbnail}}"
                                                 width="430px" height="450px">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <h2><strong>{{$news->name}}</strong></h2>
                        <hr>
                        <p><span class="mr-1"><strong>weight:</strong> {{$news->weight}}</span></p>
                        <p><span class="mr-1"><strong>Price:</strong> {{$news->price}}đ</span></p>
                        <p><span class="mr-1"><strong>Garden Name:</strong> {{$news->gardenName}}</span></p>
                        <hr>
                        <div class="table-responsive mb-2">
                            <table class="table table-sm table-borderless">
                                <tbody>
                                <tr>
                                    <td class="pl-0 pb-0 w-25">Quantity</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="def-number-input number-input safari_only mb-0">
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="/shopping/add?productId={{$news->id}}&productQuantity=1">
                            <button class="btn text-success border-success">Add to cart <i
                                    class="fa fa-shopping-cart"></i></button>
                        </a>
                    </div>
                </div>

            </section>
            <!--Section: Block Content-->
        </div>
    </div>

@endsection
