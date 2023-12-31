<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <title>{{ $title ?? 'SPK OSN' }}</title>
    <!-- Custom fonts for this template-->
    <link data-navigate-track href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link data-navigate-track
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link data-navigate-track href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">
    @if(auth()->check())
    <div id="wrapper">
        <livewire:widget.sidebar>
        <div id="content-wrapper" class="d-flex flex-column">
            <livewire:widget.navbar />

            <div id="content">
                {{ $slot }}
            </div>

        </div>
      </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @else
    {{ $slot }}
    @endif

    <!-- Bootstrap core JavaScript-->
    <script data-navigate-track src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script data-navigate-track src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script data-navigate-track src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script data-navigate-track src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script data-navigate-track src="{{ asset('sbadmin2/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script data-navigate-track src="{{ asset('sbadmin2/js/demo/chart-area-demo.js') }}"></script>
    <script data-navigate-track src="{{ asset('sbadmin2/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
