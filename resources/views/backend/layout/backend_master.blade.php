<!DOCTYPE html>
<html>
@include('backend.layout.backend_header')

<body>
    @include('backend.menu.menu')

    @include('backend.menu.sidebar')

    @yield('content')

    @include('backend.layout.backend_footer')

    @include('backend.layout.backend_script')

    @yield('page-js')

</body>

</html>
