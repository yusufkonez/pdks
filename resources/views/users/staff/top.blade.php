<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                {{--                            @if(session("addNot"))--}}
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <i class="text-success icon-circle bg-white fa-solid fa-user-plus"> </i>
                    </div>
                    <div>
                        <div class="small text-gray-500">{{date("d.m.Y")}}</div>
                        <span class="font-weight-bold">{{session("message")}}</span>
                    </div>
                </a>
                {{--                            @elseif(session("delNot"))--}}
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <i class="text-danger icon-circle fa-solid fa-user-minus"> </i>
                    </div>
                    <div>
                        <div class="small text-gray-500">{{date("d.m.Y")}}</div>
                        <span class="font-weight-bold">{{session("message")}}</span>
                    </div>
                </a>
                {{--                            @elseif(session("uptNot"))--}}
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <i class="text-warning icon-circle fa-solid fa-user-gear"> </i>
                    </div>
                    <div>
                        <div class="small text-gray-500">{{date("d.m.Y")}}</div>
                        <span class="font-weight-bold">{{session("message")}}</span>
                    </div>
                </a>
                {{--                            @endif--}}
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{\Illuminate\Support\Facades\Auth::user() -> name}}</span>
                <img class="img-profile rounded-circle"
                     src="admin/img/admin_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>

