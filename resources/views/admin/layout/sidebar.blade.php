<ul class="navbar-nav bg-black sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('img/logo-metan-regular-full.png') }}" alt="Logo" height="48px">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">PT. METAN INDO PRODUCTION</div> --}}
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

    <!-- Heading -->
    <div class="sidebar-heading">
        Footer Page
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.footer', 'tentang-kami') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Tentang Kami</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.footer', 'kontak') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Kontak</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.footer', 'redaksi') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Redaksi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.footer', 'pedoman-media-siber') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Pedoman Media Siber</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.settings') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
    </li>
    <li class="nav-item">

        <a class="nav-link" href="#" onclick="document.querySelector('#btn-logout').click();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button id="btn-logout" type="submit" name="submit" value="Logout" hidden></button>
        </form>
    </li>

</ul>
