@extends('layout.layout')
@section('content')
<div class="wrapper" style="background-color: #eae9e9">
    <section class="h-100">
        <div class="container mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img
                                    src="/img/img-register.jpg"
                                    width="525px" height="600px"
                                />
                            </div>

                            <div class="col-xl-6">
                                <form action="" method="post">
                                    @csrf
                                    <div class="card-body text-black" style="padding: 80px">
                                        <h3 class="mb-3 text-uppercase">Login Form</h3>
                                        <label class="form-label">User Name</label>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success border-success"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control border-success py-2" name="fullName"
                                                   placeholder=" ">
                                        </div>

                                        <label class="form-label">Password</label>
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-success border-success"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control border-success" name="password"
                                                   placeholder=" ">
                                        </div>
                                        <div class="row justify-content-center px-3"> <button type="submit" class="btn-block btn-submit">Submit form</button> </div>
                                        <div class="row justify-content-center my-2"> <a href="#" class="text-muted">Forgot Password?</a> </div>
                                        <div class="bottom text-center mb-5">
                                            <p href="/home-page/register" class="sm-text mx-auto mb-3">Don't have an account?
                                                <a href="/home-page/register" class="btn btn-success ml-2 btn-register">Create new
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
