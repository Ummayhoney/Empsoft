@extends("master")
@section("content")


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route( "employee.store" ) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                               placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputName1">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                               placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputName1">Designation</label>
                                        <input type="text" class="form-control" name="designation"
                                               placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputCity1">City</label>
                                        <input type="text" class="form-control" name="city"
                                               placeholder="Location">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Password">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>File upload</label>
                                        <input type="file" name="img" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="file" class="form-control file-upload-info"
                                                   placeholder="Upload Image">

                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleTextarea1">Details</label>
                                        <textarea class="form-control" name="details" rows="4"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">Join Date</label>
                                        <input type="date" class="form-control" name="joindate"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">Salary</label>
                                        <input type="text" class="form-control" name="salary"
                                               placeholder="Salary">
                                    </div>

                                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
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
