@extends("employee.master")
@section("content")
    <div class="main-panel">
        <div class="content-wrapper">


            <div class="row">

                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                 alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">Work <i
                                    class="mdi mdi-diamond mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ $work }}</h2>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="assets/images/dashboard/circle.svg" class="card-img-absolute"
                                 alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">Leave <i
                                    class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ $leave }}</h2>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> </a> </span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
