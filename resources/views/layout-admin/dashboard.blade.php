<!doctype html>
<html class="no-js" lang="en">

@include('layout-admin.head')

<body>
<!-- Start Left menu area -->
@include('layout-admin.left-sidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
@include('layout-admin.header')
<!------Content ----------->

@yield('content')

<!------End Content ----------->


    @include('layout-admin.footer')
</div>
@yield('js')
@include('layout-admin.scripts')
</body>
</html>
