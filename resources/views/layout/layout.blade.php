<!doctype html>
<html class="no-js" lang="en">

@include('layout.head')

<body>
<!-- Start Left menu area -->
{{--@include('layout.left-sidebar')--}}
<!-- End Left menu area -->
<!-- Start Welcome area -->
@include('layout.header')
<!------Content ----------->

@yield('content')

<!------End Content ----------->


    @include('layout.footer')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@yield('js')
{{--@include('layout.scripts')--}}
</body>
</html>
