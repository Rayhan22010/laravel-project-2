<!DOCTYPE html>
<html>
@include('frontend.layout.header')

<body>
    @include('frontend.menu.menu')

    @yield('content')

    @include('frontend.layout.footer')

    @include('frontend.layout.script')

    @yield('page-js')

</body>

</html>
