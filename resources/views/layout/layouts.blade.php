<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')</title>
  <meta content="construction " name="description">
  <meta content="" name="keywords">

  <link href="storage/assets/img/favicon.png" rel="icon">
  <link href="storage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="storage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="storage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="storage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="storage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="storage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="storage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="storage/assets/css/main.css" rel="stylesheet">



</head>
<body>
   @include('master.navbar')

   <div class=" " >
    @yield('content')


   </div>


   @include('master.footer')

   









   <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
    <!-- Vendor JS Files -->
  <script src="storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="storage/assets/vendor/aos/aos.js"></script>
  <script src="storage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="storage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="storage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="storage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="storage/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="storage/assets/js/main.js"></script>
</body>
</html>
