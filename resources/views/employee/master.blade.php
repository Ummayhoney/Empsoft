<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("assets/vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/css/vendor.bundle.base.css") }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <script>
            @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>


</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset("assets/images/logo.svg") }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset("assets/images/logo-mini.svg") }}"
                                                                           alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->



    @include("employee.nav")
    <!-- partial -->
    @yield("content")
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset("assets/vendors/js/vendor.bundle.base.js")}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset("assets/vendors/chart.js/Chart.min.js")}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset("assets/js/off-canvas.js")}}"></script>
<script src="{{ asset("assets/js/hoverable-collapse.js")}}"></script>
<script src="{{ asset("assets/js/misc.js")}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset("assets/js/dashboard.js")}}"></script>
<script src="{{ asset("assets/js/todolist.js")}}"></script>
<!-- End custom js for this page -->
</body>
</html>
