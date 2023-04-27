<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary navbar-light ">
    <!-- Container wrapper -->
    <div class="container-fluid">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="{{route('dashboard')}}">Product Management</a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </li>
      </ul>

    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
