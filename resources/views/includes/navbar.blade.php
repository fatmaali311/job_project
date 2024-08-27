<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/job/index') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/job/index') }}" class="nav-link {{ request()->is('job/index') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/job/about') }}" class="nav-link {{ request()->is('job/about') ? 'active' : '' }}">About</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('job/list') || request()->is('job/detail') ? 'active' : '' }}" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('/job/list') }}" class="dropdown-item">Job List</a>
                    <a href="{{ url('/job/detail') }}" class="dropdown-item">Job Detail</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('job/category') || request()->is('job/testimonial') || request()->is('job/404') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('/job/category') }}" class="dropdown-item">Job Category</a>
                    <a href="{{ url('/job/testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ url('/job/404') }}" class="dropdown-item">404</a>
                </div>
            </div>
            <a href="{{ url('/job/contact') }}" class="nav-link {{ request()->is('job/contact') ? 'active' : '' }}">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
