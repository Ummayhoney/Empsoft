@extends("employee.master")
@section("content")


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route( "leave.store_apply_leave" ) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                               value="{{ $employee->first_name." ".$employee->last_name }} " placeholder="Name" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Designation</label>
                                        <input type="text" class="form-control" name="last_name"
                                               placeholder="Designation" value="{{ $employee->designation }} " disabled>
                                        <input type="hidden" value="{{ $employee->id }}" name="e_id">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">From Date</label>
                                        <input type="date" class="form-control" name="f_date"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">To Date</label>
                                        <input type="date" class="form-control" name="t_date"
                                               placeholder="Password">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputName1">Leave Title</label>
                                        <input type="text" class="form-control" name="title"
                                               placeholder="Task Title">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleTextarea1">Leave Details</label>
                                        <textarea class="form-control" name="task_details" rows="4"></textarea>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
