<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
@include('layout.header')
    <div class="wrapper">
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-8">
                    <table class="table w3-card-4">
                        <thead style="background-color: #18a514">
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
                        <span onclick="this.parentElement.style.display='none'"
                              class="w3-button w3-large w3-display-topright">&times;</span>
                                <h3>Success!</h3>
                                <p>{{session('remove')}}</p>
                            </div>
                        @endif
                        <tr>
                            <th style="width: 100px"></th>
                            <th>Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="border-bottom">
                        <?php
                        $totalPrice = 0;
                        ?>
                        @foreach($shoppingCart as $products)
                            <?php
                            if (!empty($products)) {
                                $totalPrice += $products->price * $products->quantity;
                            }
                            ?>
                            <form action="{{route('name')}}" method="get">
                                <input type="hidden" name="cartAction" value="update">
                                <input type="hidden" name="productId" value="{{$products->id}}">
                                <tr>
                                    <td class="mt-2"><img src="{{$products->thumbnail}}" style="width: 100px; height: 100px">
                                    </td>
                                    <td>
                                        <div>
                                            {{$products->name}}
                                        </div>
                                        <div>Nha vuon</div>
                                    </td>
                                    <td>{{$products->price}}</td>
                                    <td><input style="outline: none; width: 150px" type="number" min="1" name="productQuantity"
                                               value="{{$products->quantity}}"></td>
                                    <td>{{$products->quantity * $products->price}}</td>
                                    <th>
                                        <button class="btn btn-primary m-2 d-block" style="font-size: 15px"><i
                                                class="fas fa-edit"></i>
                                            Update
                                        </button>
                                        <a class="btn btn-danger m-2" href="/shopping/remove?productId={{$products->id}}"
                                           onclick="return confirm('Ban co muon xoa?')">
                                            <i class="fas fa-trash-alt"></i>
                                            Remove
                                        </a>
                                    </th>
                                </tr>
                            </form>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <div class="w3-card-4 rounded">
                        <div class="w3-container" style="background-color: #18a514">
                            <h2>Order</h2>
                        </div>

                        <form class="w3-container" method="post" action="/shopping/save">
                            @csrf
                            <div class="m-0 mt-3">
                                <label>Name</label>
                                <input class="w3-input" type="text" name="shipName">
                            </div>
                            <div class="m-0 mt-3">
                                <label>Phone</label>
                                <input class="w3-input" type="text" name="shipPhone">
                            </div>
                            <div class="m-0 mt-3">
                                <label>Address</label>
                                <input class="w3-input" type="text" name="shipAddress">
                            </div>
                            <div class="mb-3 mt-3">
                                <label>Note</label>
                                <input class="w3-input" type="text" name="note">

                            </div>
                            <h3 class="">Total Price: {{$totalPrice}}</span></h3>
                            <div class="row ml-1">
                                <button class=" btn btn-success mb-3" style="padding: 8px 143px">Submit Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
</div>
</body>
</html>
