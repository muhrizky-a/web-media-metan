<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="36px">
        </div>
        <div class="sidebar-brand-text mx-3">PT. METAN INDO PRODUCTION</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.article.list') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Artikel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.category.list') }}">
            <i class="fas fa-fw fa-tag"></i>
            <span>Kategori Artikel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.journalist.list') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Wartawan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>