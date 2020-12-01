<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3"><sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">


{{-- <!-- Nav Item - Pages Collapse Menu -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Data Barang</span></a>
</li> --}}

<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
<a class="nav-link" href="databarang">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Data Barang</span></a>
</li>

<!-- Nav Item - Tables -->

<li class="nav-item">
  <a class="nav-link" href="{{route('income.index')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Barang masuk</span></a>
  </li>

<li class="nav-item">
<a class="nav-link" href="{{route('outcome.index')}}">
    <i class="fas fa-fw fa-table"></i>
    <span>Barang Keluar</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="login">
      <i class="glyphicon glyphicon-cog"></i>
      <span>LogOut</span></a>
  </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->