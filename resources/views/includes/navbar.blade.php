<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
        <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item btn btn-block" type="submit">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </button>
                  </form>
        </div>
    </li>

    </ul>

</nav>
<!-- End of Topbar -->


  

  <!-- Nav Item - User Information -->
  {{-- <h3><font color=”#0000ff”>INVENTARIS ALAT TULIS KANTOR</font></h3> --}}
  <h3 style = "font-family:courier,arial,helvetica;">
    INVENTARIS ALAT TULIS KANTOR
  </h3>

</ul>

</nav>
<!-- End of Topbar -->