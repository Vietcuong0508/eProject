@extends('layout-admin.dashboard')
@section('content')
    <div class="row" style="display: block">
        <div class="text-center m-5">
            <h1>Create Product</h1>
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="col-6 form-group">
                        <input class="form-control" type="text" name="thumbnail" placeholder="Thumbnail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <input class="form-control" type="text" name="weight" placeholder="Weight">
                    </div>
                    <div class="col-6 form-group">
                        <input class="form-control" type="text" name="price" placeholder="Price">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
