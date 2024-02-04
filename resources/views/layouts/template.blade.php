<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
<div class="site-wrap" id="home-section">
    @include('includes.navbar')


    @yield('content')


    @include('includes.footer')
    <!-- Back to Top -->
 </div>

@include('includes.jsFooter')

<!-- Template Javascript -->
{{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}
</body>

</html>
