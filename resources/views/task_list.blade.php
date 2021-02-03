@extends("master")
@section("content")
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> ID</th>
                                    <th> Image </th>
                                    <th> First Name</th>
                                    <th> Last Name</th>
                                    <th> Designation</th>
                                    <th> Gender</th>
                                    <th> City</th>
                                    <th> Join Date</th>
                                    <th> Salary</th><th> Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($employee_list))
                                    @foreach($employee_list as $value)
                                        <tr>
                                            <td>{{$loop->iteration}} </td>
                                            <td class="py-1">
                                                @if(isset($value->img))
                                                    <img src="../../assets/images/faces-clipart/pic-1.png" alt="image">
                                                @else
                                                    <img src="{{ asset("uploads/".$value->img) }}" alt="image">
                                                @endif
                                            </td>
                                            <td> {{ $value->first_name }}</td>
                                            <td> {{ $value->last_name }}</td>
                                            <td> {{ $value->designation }}</td>
                                            <td> {{ $value->gender }}</td> <td> {{ $value->city }}</td>
                                            <td> {{ date("d M,Y",strtotime($value->joindate)) }}</td>
                                            <td>  {{ $value->salary }}</td>
                                            <td><a href="{{ route("assign_task_list",[$value->id]) }}" class="btn btn-success">Assign</a> </td>

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
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a
                        href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
