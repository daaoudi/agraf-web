<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')</title>
  <meta content="construction " name="description">
  <meta content="" name="keywords">

  <link href="/storage/assets/img/agraf.png" rel="icon">
  <link href="/storage/assets/img/agraf.png" rel="">
  

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/adminlte_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte_assets/dist/css/adminlte.min.css">


  <!-- Vendor CSS Files -->
  <link href="/storage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/storage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/storage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/storage/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/storage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/storage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- Template Main CSS File -->
  <link href="/storage/assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
  
  <style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    }
    </style>

</head>
<body onload="startTime()">

   @include('master.navbar')
  
   <div class=" " >
    @yield('content')


   </div>


   @include('master.footer')

   









   <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>
    <!-- Vendor JS Files -->
  <script src="/storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/storage/assets/vendor/aos/aos.js"></script>
  <script src="/storage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/storage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/storage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/storage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/storage/assets/vendor/php-email-form/validate.js"></script>














  <!-- jQuery -->
<script src="/adminlte_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/adminlte_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte_assets/plugins/jszip/jszip.min.js"></script>
<script src="/adminlte_assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte_assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte_assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte_assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte_assets/dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
  <!-- Template Main JS File -->
  <script src="/storage/assets/js/main.js"></script>
  <script>
    // Document.onload(alert('gagagag'))
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>
