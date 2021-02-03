@extends("employee.master")
@section("content")
    <div class="main-panel">
        <div class="content-wrapper">
            {{--<div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route( "assignTask.store" ) }}" method="post" enctype="multipart/form-data">
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
                                        <button type="submit" class="btn btn-gradient-primary mr-2">Search</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>--}}
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
                                    <th> From Date</th>
                                    <th> To Date</th>
                                    <th> Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($attendence_list))
                                    @foreach($attendence_list as $value)
                                        <tr>
                                            <td>{{$loop->iteration}} </td>

                                            <td> {{ $value->first_name }}</td>
                                            <td> {{ $value->last_name }}</td>

                                            <td>{{ date("d M,Y",strtotime($value->f_date)) }} </td>
                                            <td>{{ date("d M,Y",strtotime($value->t_date)) }} </td>
                                            <td>
                                                @if($value->status == 1)
                                                    <b>Pending</b>
                                                @else
                                                    <b>Approve</b>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

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
@endsection
