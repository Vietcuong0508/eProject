@include('layout.head')
@include('layout.header')
<body style="background-color: #eae9e9">
<section class="h-100">
    <div class="container mt-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img
                                src="/img/img-register.jpg"
                                class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                            />
                        </div>

                        <div class="col-xl-6">
                            <form action="" method="post">
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-3 text-uppercase">Register Form</h3>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Full name</label>
                                        <input type="text" class="form-control border-success" name="fullName" placeholder=" ">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control border-success" name="phone"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control border-success" name="address"
                                                       placeholder=" ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control border-success" name="email" placeholder=" ">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">User Name</label>
                                        <input type="text" class="form-control border-success" name="username"
                                               placeholder=" ">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control border-success" name="password"
                                               placeholder=" ">
                                    </div>

                                    <div class="form-outline mb-4" style="display: none">
                                        <label class="form-label">Permission</label>
                                        <select name="permission" class="form-control border-success">
                                            <option value="user">user</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">status</label>
                                        <input type="text" class="form-control border-success" name="status"
                                               placeholder=" ">
                                    </div>

                                    <div class="row justify-content-center px-3">
                                        <button type="submit" class="btn-block btn-submit">Submit form</button>
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
</body>
</html>
