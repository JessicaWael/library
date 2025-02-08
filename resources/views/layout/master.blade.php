<!DOCTYPE html>
<html>
<head>
   @include('layout.head')
</head>
<body>
    @include('layout.header')
    <main>
        @yield("content")
        <!-- Aside -->
<aside class="bsb-sidebar-1 offcanvas offcanvas-start"  style="background-color:#072f58;color: #fff;" tabindex="-1" id="bsbSidebar1" aria-labelledby="bsbSidebarLabel1">
  <div class="offcanvas-header">
  <div class="sidebar-brand d-flex align-items-center" style="gap: 0.5rem;">
  <img src="{{ asset('image/logo.jpg') }}" id="bsbSidebarLabel1" class="img-fluid" alt="library" style="width: 50px; height: auto;">
  <span style="font-size: 1.2rem; color: #fff;">Library</span>
</div>

    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body pt-0">
    <hr class="sidebar-divider mb-3">
    <ul class="navbar-nav">
      <li class="nav-item">
       
        <div class="collapse show" id="dashboardExamples">
          <ul class="nav flex-column ms-4">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">
                <div class="nav-link-icon text-primary-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="/books/create">
                <div class="nav-link-icon text-primary-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Create Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="/books/index">
                <div class="nav-link-icon text-primary-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Show All Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-primary-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Author</span>
              </a>
            </li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item mt-3">
        <h6 class="py-1 text-secondary text-uppercase fs-7">Pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link p-3" data-bs-toggle="collapse" href="#pageExamples" role="button" aria-expanded="false" aria-controls="pageExamples">
          <div class="nav-link-icon text-danger">
            <i class="bi bi-folder"></i>
          </div>
          <span class="nav-link-text fw-bold">Pages</span>
        </a>
        <div class="collapse" id="pageExamples">
          <ul class="nav flex-column ms-4">
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-danger-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Account</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-danger-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-danger-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="/books/index">
                <div class="nav-link-icon text-danger-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-danger-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Author</span>
              </a>
            </li>
           
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link p-3" data-bs-toggle="collapse" href="#authExamples" role="button" aria-expanded="false" aria-controls="authExamples">
          <div class="nav-link-icon text-success">
            <i class="bi bi-gear"></i>
          </div>
          <span class="nav-link-text fw-bold">Authentication</span>
        </a>
        <div class="collapse" id="authExamples">
          <ul class="nav flex-column ms-4">
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-success-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Sign In</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-secondary" aria-current="page" href="#!">
                <div class="nav-link-icon text-success-emphasis">
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <span class="nav-link-text">Sign Up</span>
              </a>
            </li>
           
          </ul>
        </div>
      </li>
     
      
</aside>
        
    </main>
    <footer>
    @include('layout.footer')
    </footer>
    <script src="{{ asset('scripts/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        
</body>
</html>