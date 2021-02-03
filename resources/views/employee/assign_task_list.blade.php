@extends("employee.master")
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
                                    <th> Assign Date</th>
                                    <th> First Name</th>
                                    <th> Last Name</th>
                                    <th> Designation</th>
                                    <th> Title</th>
                                    <th> Details</th>
                                    <th> Status</th>
                                    <th>

                                            Action

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($assign_task))
                                    @foreach($assign_task as $value)
                                        <tr>
                                            <td>{{$loop->iteration}} </td>
                                            <td>{{ date("d M,Y",strtotime($value->date)) }} </td>
                                            <td> {{ $value->first_name }}</td>
                                            <td> {{ $value->last_name }}</td>
                                            <td> {{ $value->designation }}</td>

                                            <td> {{ $value->title }}</td>
                                            <td> {{ $value->task_details}}</td>
                                            <td>  @if($value->status == 1)
                                                    <b>Pending</b>
                                                @elseif($value->status == 2)
                                                    <b>Working</b>
                                                      @else
                                                      <b>Done</b>
                                                @endif

                                            </td>

                                           <td>
                                               <a href="/task/approve/{{$value->id}}/1" class="btn btn-sm btn-danger">Pending</a>
                                               <a href="/task/approve/{{$value->id}}/2" class="btn btn-sm btn-warning">Working</a>
                                               <a href="/task/approve/{{$value->id}}/3" class="btn btn-sm btn-success">Done</a>
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
