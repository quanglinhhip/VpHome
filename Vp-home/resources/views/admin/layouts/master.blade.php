<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{ asset('theme/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    @yield('style-libs')

    <link href="{{ asset('theme/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('theme/admin/css/customize.css') }}" rel="stylesheet"> --}}


    @yield('styles')
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Begin sidebar -->
        @include('admin.layouts.sidebar')
        <!-- End sidebar -->

        <div id="page-wrapper" class="gray-bg">

            <div class="row border-bottom">
                <!-- Begin header -->
                @include('admin.layouts.header')
                <!-- End header -->
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <!-- Begin footer -->
            @include('admin.layouts.footer')
            <!-- End footer -->
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('theme/admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('theme/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('theme/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

     <!-- jQuery UI -->
     <script src="{{ asset('theme/admin/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        @yield('script-libs')

     <!-- Custom and plugin javascript -->
    <script src="{{ asset('theme/admin/js/inspinia.js') }}"></script>
    <script src="{{ asset('theme/admin/js/plugins/pace/pace.min.js') }}"></script>



    @yield('scripts')
</body>

</html>
