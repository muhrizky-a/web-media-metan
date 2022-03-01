<nav class="navbar d-block sticky-top navbar-expand-md navbar-dark bg-dark">

    <div class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ route('home') }}">
                <img src="{{ asset('img/logo-metan-regular-full.png') }}" alt="Logo" height="36px">
                {{-- <img src="{{ asset('img/logo-metan-tipografi.png') }}" alt="Media Tambang" height="36px"> --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">

                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('category.page', $category) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>


    </div>

    <form class="container-fluid py-2 search-bar" id="searchNavbar" aria-labelledby="searchNavbarLabel"
        action="{{ route('search') }}">
        <div class="input-group">
            <input type="text" class="form-control" name="q" placeholder="Cari Artikel" aria-label="Username"
                aria-describedby="basic-addon1">
            <button type="submit" class="input-group-text btn-outline-warning" style="color: black;"><i
                    class="fa fa-search" aria-hidden="true"></i></span>
        </div>
    </form>

</nav>
