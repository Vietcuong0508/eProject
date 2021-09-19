<header class="header">
    <div class="float-left">
        <div class="d-block"><a href="/"><img class="ml-2" src="/images/logo_background_black.png" width="86px"></a>
        </div>
    </div>
    <div class="search">
        <div class="">
            <div class="search__box"><input type="text" class="search-input" placeholder="Search for products" value="">
                <button class="btn search__btn"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="cart-login">
        <div class="float-right mr-5 cart" style="padding: 20px; "><i class="far fa-shopping-cart"></i><a
                href="/shopping/cart">My cart</a></div>
        @if(\Illuminate\Support\Facades\Auth::check())

            <div class="dropdown float-right" style="padding: 13px">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="background-color: black; color: white">
                    {{\Illuminate\Support\Facades\Auth::user()->fullName}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item border-0" href="{{route('logout')}}"><i
                            class="fas fa-power-off mr-2 ic-logout"></i>Đăng xuất</a>
                </div>
                @else
                    <div class="float-right login" style="padding: 20px"><a href="/home/login">Login</a></div>
                @endif
            </div>
        </div>
    </div>
</header>
