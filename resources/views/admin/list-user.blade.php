@extends('layout-admin/dashboard')
@section('content')
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
        <table class="table mt-5" style="margin-left: 150px">
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
                        <a href="/admin/edit/{{$users->id}}" style="margin-right: 5px">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a>
                        <form action="/admin/destroy/{{$users->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn px-3  btn-danger" href="#" title="Delete"
                                    onclick="return confirm('Are you sure')"><i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
