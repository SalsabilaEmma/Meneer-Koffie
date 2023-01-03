<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard"> <img alt="image" src="{{url('../img/logomk.jpeg')}}" class="header-logo"/>
            <span class="logo-name">Meneer Koffie</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="/dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="list"></i><span>Master Data</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('index.menu')}}">Menu</a></li>
              <li><a class="nav-link" href="{{route('index.gallery')}}">Gallery</a></li>
            </ul>
          </li>
        <li>
            <a href="{{route('index.reserv')}}" class="nav-link"><i data-feather="layout"></i><span>Reservasi</span></a>
        </li>
      </ul>
    </aside>
</div>
