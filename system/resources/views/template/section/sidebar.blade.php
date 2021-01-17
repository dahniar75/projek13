  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{url('public')}}/src/img/bunga.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rustic Garden</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
                            <center><i class="fa fa-info"></i> {{request()->user()->nama}}</center>
                            @elseif(Auth::guard('penjual')->check())
                            <center><i class="fa fa-info"></i> {{Auth::guard('penjual')->user()->nama}}<br>Penjual</center>
                            @elseif(Auth::guard('pembeli')->check())
                            <center><i class="fa fa-info"></i> {{Auth::guard('pembeli')->user()->nama}}<br>Pembeli</center>
                            @else
                            
                            <a href="{{url('logout')}}">Silahkan Login</a>
                             @endif
          </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('admin/beranda')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/produk')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>