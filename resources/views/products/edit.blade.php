@extends('layout-admin/dashboard')
@section('content')
    <section class="h-100">
        <div class="container mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4"style="margin-left: 200px">
                        <div class="col-xl-12">
                            <form action="/admin/update-product/{{$edit->id}}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-3 text-uppercase">Create Product</h3>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control border-success" name="name"
                                               value="{{$edit->name}}">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Thumbnail</label>
                                                <input type="text" class="form-control border-success" name="thumbnail"
                                                       value="{{$edit->thumbnail}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Weight</label>
                                                <input type="text" class="form-control border-success" name="weight"
                                                       value="{{$edit->weight}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Price</label>
                                        <input type="text" class="form-control border-success" name="price"
                                               value="{{$edit->price}}">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">gardener's name</label>
                                        <input type="text" class="form-control border-success" name="gardenerName"
                                               placeholder=" ">
                                    </div>

                                    <div class="row justify-content-center px-3">
                                        <button type="submit" class="btn btn-success">Submit form</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
