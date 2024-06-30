<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('main.index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 484px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 d-flex">
        <div class="image">
          <img src="{{ '/storage/' . auth()->user()->avatar }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item mt-3 pb-3 mb-3 user-panel">
            <a href="{{ route('admin.main.index') }}" class="nav-link">
              <ion-icon name="home-outline"></ion-icon>
              <p>Головна</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.course.index') }}" class="nav-link">
              <ion-icon name="albums-outline"></ion-icon>
              <p>Курси</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <ion-icon name="people-outline"></ion-icon>
              <p>Користувачі</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.tag.index') }}" class="nav-link">
              <ion-icon name="pricetags-outline"></ion-icon>
              <p>Теги</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon name="newspaper-outline"></ion-icon>
              <p>
                Розсилка
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.newsletter.create') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Створити розсилку</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.newsletter.index') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Усі розсилки</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon name="bulb-outline"></ion-icon>
              <p>
                Блог
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.blog.create') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Створити пост</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.blog.index') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Усі пости</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item pb-3 mb-3 user-panel"></li>

          <li class="nav-item">
            <a href="{{ route('admin.teacher.index') }}" class="nav-link">
              <ion-icon name="home-outline"></ion-icon>
              <p>Викладачі</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon name="book-outline"></ion-icon>
              <p>
                Студенти
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.student.index') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Список студентів</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.blog.create') }}" class="nav-link">
                  <ion-icon name="ellipse-outline"></ion-icon>
                  <p>Домашні завдання</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 35.688%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>