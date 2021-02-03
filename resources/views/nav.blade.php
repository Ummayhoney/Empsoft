<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src=" {{ asset("assets/images/faces/face1.jpg") }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Super Admin</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Employee</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/add_new_employee">Add New Employee</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route("employee.list") }}">Employee List</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Task List</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route("employee.task_list") }}">Assign Task List</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route("assignTask.index") }}">Task List</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uil" aria-expanded="false"
               aria-controls="ui-basic">
                <span class="menu-title">Attendence & Leave</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="uil">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route("attendence.list") }}">Check Attendence</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route("leave.approve_list") }}">Approve Leave</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route("admin.logout") }}">
                <span class="menu-title">Log Out</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
