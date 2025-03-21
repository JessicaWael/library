<header id="header-demo">
  <nav class="navbar navbar-expand-sm " id="nav-header" style="background-color:#072f58;" text-light>
    <div class="container">
      <a class="navbar-brand d-sm-none" href="#!">
        <img src="./assets/img/bsb-logo.svg" class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#bsbNavbar" aria-controls="bsbNavbar" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="bsbNavbar" aria-labelledby="bsbNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="bsbNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item me-3">
              <a class="nav-link" href="#!" data-bs-toggle="offcanvas" data-bs-target="#bsbSidebar1" aria-controls="bsbSidebar1">
                <i class="bi-filter-left fs-3 lh-1"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/books/create">create Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/books/index">Show All Books</a>
            </li>
          </ul>
          <form class="d-flex ms-auto me-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>
