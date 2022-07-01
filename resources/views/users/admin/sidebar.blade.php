<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route("a-home")}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-users-gear"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Yönetici</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{route("a-users")}}">
            <i class="fas fa-clipboard-user"></i>
            <span class = "">Üye İşlemleri</span></a>
    </li>

    <!-- Nav Item - Parks -->
    <li class="nav-item">
        <a class="nav-link" href="{{route("a-parks")}}">
            <i class="fas fa-tree-city"></i>
            <span>Park İşlemleri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
