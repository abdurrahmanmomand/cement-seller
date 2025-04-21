<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('home') ? '' : 'collapsed' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('show-all.index') ? '' : 'collapsed' }}" href="{{ route('show-all.index') }}">
          <i class="bi bi-table"></i>
          <span>Show All Record</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('vendor') ? '' : 'collapsed' }}" href="{{ route('vendor') }}">
          <i class="bi bi-table"></i>
          <span>Show Vendors Details</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('customer') ? '' : 'collapsed' }}" href="{{ route('customer') }}">
          <i class="bi bi-table"></i>
          <span>Show Customer Details</span>
        </a>
      </li>



    </ul>

  </aside>