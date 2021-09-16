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
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th class="col-3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $obj)
                <tr>
                    <td>{{$obj->shipName}}</td>
                    <td>{{$obj->shipPhone}}</td>
                    <td>{{$obj->shipAddress}}</td>
                    <td class="row hidden-phone">
                        <a href="/admin/edit-product/{{$obj->id}}" style="margin-right: 5px">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                        </a>
                        <form action="/admin/destroy-product/{{$obj->id}}" method="post">
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
        <div class="row align-center">
            @if ($list->lastPage() > 1)
                <ul class="pagination">
                    <li class="{{ ($list->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $list->url(1) }}">Previous</a>
                    </li>
                    @for ($i = 1; $i <= $list->lastPage(); $i++)
                        <li class="{{ ($list->currentPage() == $i) ? ' active' : '' }}">
                            <a href="{{ $list->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $list->url($list->currentPage()+1) }}">Next</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
@endsection
