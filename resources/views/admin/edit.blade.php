<!doctype html>
<html class="no-js" lang="en">

@include('layout-admin.head')

<body style="background-color: #f6f8fa">
<!-- Start Left menu area -->
@include('layout-admin.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
@include('layout-admin.header')
<!------Content ----------->
    <section class="h-100">
        <div class="container mt-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4" style="margin-left: 200px">
                        <form action="/admin/update/{{$obj->id}}" method="post">
                            @method('put')
                            @csrf
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-3 text-uppercase">Edit Form</h3>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Full name</label>
                                    <input type="text" class="form-control border-success" name="fullName"
                                           value="{{$obj->fullName}}">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control border-success" name="phone"
                                                   value="{{$obj->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control border-success" name="address"
                                                   value="{{$obj->address}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control border-success" name="email"
                                           value="{{$obj->email}}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">User Name</label>
                                    <input type="text" class="form-control border-success" name="username"
                                           value="{{$obj->username}}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control border-success" name="password"
                                           value="{{$obj->password}}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Permission</label>
                                    <select name="permission" class="form-control border-success">
                                        <option value="User">User</option>
                                        <option value="Admin">admin</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">status</label>
                                    <input type="text" class="form-control border-success" name="status"
                                           value="{{$obj->status}}">
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
    </section>
    <!------End Content ----------->


</div>
@yield('js')
@include('layout-admin.scripts')
</body>
</html>
