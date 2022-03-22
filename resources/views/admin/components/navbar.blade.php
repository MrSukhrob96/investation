    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('cabinet') }}" class="brand-link">
            <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Админ Панель</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <!--          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
                </div>
                <div class="info">

                    <a href="#" class="d-block  badge  text-white">
                        <h5> </h5>
                    </a>

                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Меню
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Мой Чек</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('recomended', ['user' =>  auth()->user()->reference ]) }} " class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Рекомендовать</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('cabinet/users') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Пользователей</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <form method="POST" action="{{ url('logout') }}">
                            @csrf
                            <button class="btn btn-primary" style="width: 100%;">
                                Выход
                                <i class="right fas fa-angle-right"></i>
                            </button>
                        </form>
                    </li>

                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>