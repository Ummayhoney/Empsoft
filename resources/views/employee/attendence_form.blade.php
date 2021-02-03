@extends("employee.master")
@section("content")


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route( "attendence.store_attendence" ) }}" method="post" enctype="multipart/form-data">
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
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="Present">Present</option>
                                            <option value="Absent">Absent</option>
                                            <option value="Half Day">Half Day</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">Attendence Date</label>
                                        <input type="date" class="form-control" name="date"
                                               placeholder="Password">
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
