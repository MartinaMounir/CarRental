<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../bookingdesign/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../bookingdesign/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../bookingdesign/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../bookingdesign/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../bookingdesign/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
 @yield('content')
 {{ $slot }}
<!-- Back to Top -->
{{--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>--}}


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../bookingdesign/lib/wow/wow.min.js"></script>
<script src="../bookingdesign/lib/easing/easing.min.js"></script>
<script src="../bookingdesign/lib/waypoints/waypoints.min.js"></script>
<script src="../bookingdesign/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/moment.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../bookingdesign/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="../bookingdesign/js/main.js"></script>
</body>

</html>
