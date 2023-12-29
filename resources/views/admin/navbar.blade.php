        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #F3EEEA; ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            {{-- <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Account</span>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-user mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul> --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-circle fa-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="./img/profile-user.svg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h2 class="dropdown-item-title">
                                        {{ Auth::user()->name }}
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h2>
                                    <p class="text-sm">Admin</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Sign Out') }} <i class="fas fa-sign-out-alt"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
