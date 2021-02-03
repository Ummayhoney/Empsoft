@extends("master")
@section("content")
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="form_data" action="{{ route( "attendence.search" ) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">Search Date</label>
                                        <input type="date" class="form-control" name="date"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword4">To Date</label>
                                        <input type="date" class="form-control" name="date"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="button" onclick="searchData()" class="btn btn-gradient-primary mr-2">Search</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> ID</th>

                                    <th> First Name</th>
                                    <th> Last Name</th>
                                    <th> Total Present</th>

                                </tr>
                                </thead>
                                <tbody id="search_data">
                                @include("attendence_list_data")
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © </span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a></span>
            </div>
        </footer>
        <!-- partial -->
    </div>

    <script>
        function searchData() {
            var formdata = $("#form_data").serialize();
            var respondUrl = $("#form_data").attr("action");

          $.ajax({
                url: respondUrl,
                data: formdata,
                type: 'POST',
                success: function (data) {
                    // do something with the result
                    alert("Good job!", "Submitted!", "success");
                    $("#search_data").html(data);
                }
            });
        }
    </script>
@endsection
