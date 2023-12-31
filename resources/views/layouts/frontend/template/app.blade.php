<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Website Company Profile</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <!-- ======= Header ======= -->
        @include('layouts.frontend.template.partials.header')
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        @include('layouts.frontend.template.partials.section')
        <!-- End Hero -->

        <!-- ======= Main ======= -->
        <main id="main">
            @yield('content')
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        @include('layouts.frontend.template.partials.footer')
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('') }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{ asset('') }}assets/vendor/aos/aos.js"></script>
        <script src="{{ asset('') }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('') }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('') }}assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('') }}assets/js/main.js"></script>
    </body>
</html>
