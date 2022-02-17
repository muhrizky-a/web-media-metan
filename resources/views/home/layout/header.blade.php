<nav class="navbar d-block sticky-top navbar-expand-lg navbar-dark bg-dark">

  <div class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand " href="{{ route('home') }}">
        <!-- <img src="{{ asset('img/logo.png') }}" alt="Logo" height="36px"> -->
        <h2 class="navbar-toggler">PT. METAN INDO PRODUCTION</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->

          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

    <button class="btn btn-outline-success mx-4" type="button" data-bs-toggle="search-bar" data-bs-target="#searchNavbar" aria-controls="searchNavbar">Search</button>
  </div>
  <div class="container-fluid">
    <form class="container-fluid py-2 search-bar" id="searchNavbar" aria-labelledby="searchNavbarLabel" action="{{ route('search') }}">
      <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Cari Artikel" aria-label="Username" aria-describedby="basic-addon1">
        <button type="submit" class="input-group-text btn-outline-warning" style="color: black;">Cari</span>
      </div>
    </form>
  </div>
</nav>