<!DOCTYPE html>
<html lang="en">

@include('includes.admin.head')


    <body class="nav-md">
    <div class="container body">
        <div class="main_container">

    @include('includes.admin.navbar')



            @yield('content')



    @include('includes.admin.footer')
    <!-- Back to Top -->
        </div>
    </div>

    @include('includes.admin.jsFooter')
      </body>
</html>
