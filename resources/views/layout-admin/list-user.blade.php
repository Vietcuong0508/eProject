@include('layout-admin.head')

<body>
<!-- Start Left menu area -->
@include('layout-admin.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    @include('layout-admin.header')
@if(session('message'))
    <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Success!</h3>
        <p>{{session('message')}}</p>
    </div>
@endif
@if(session('remove'))
    <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Success!</h3>
        <p>{{session('remove')}}</p>
    </div>
@endif
<div class="container">
    <table class="table" style="margin-left: 120px">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Permission</th>
            <th class="col-3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $users)
            <tr>
                <td>{{$users->fullName}}</td>
                <td>{{$users->phone}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->address}}</td>
                <td>{{$users->permission}}</td>
                <td class="row hidden-phone">
                    <a class="btn btn-primary"
                       href="/admin/edit/{{$users->id}}">Update</a>&nbsp;&nbsp;
                    <form action="/admin/destroy/{{$users->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn px-3  btn-danger" href="#" title="Delete"
                                onclick="return confirm('Are you sure')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    @include('layout-admin.footer')
</div>
@yield('js')
@include('layout-admin.scripts')
</body>
</html>
