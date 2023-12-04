        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand text-center" href="{{ url('/') }}" style="height: 150px; padding-top:24px;">
                <img src="{{ asset('assets/img/logo.png') }}" width="72px" class="mb-2" alt="">
                <div class="sidebar-brand-text mx-2">
                    <p class="logo-name pb-0 mb-0">Master Agent</p>
                    <span class="sub-name">2D | 3D</span>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    {{-- <img class="mr-1" src="{{ asset('assets/img/Icons/Dashboard.svg') }}" width="18px" alt=""> --}}
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Components:</h6>
                        @if (Auth::user()->role == "Admin")
                        <a class="collapse-item" href="{{ route('adminList') }}">
                            <i class="fas fa-users mr-2"></i>
                            Admins
                        </a>
                        <a class="collapse-item" href="{{ route('masterList') }}">
                            <i class="fas fa-users mr-2"></i>
                            Masters
                        </a>
                        @endif
                        @if (Auth::user()->role == "Master" || Auth::user()->role == "Admin")
                        <a class="collapse-item" href="{{ route('agentList') }}">
                            <i class="fas fa-users mr-2"></i>
                            Agents
                        </a>
                        @endif
                        @if (Auth::user()->role == "Agent" || Auth::user()->role == "Admin")
                        <a class="collapse-item" href="{{ route('userList') }}">
                            <i class="fas fa-users mr-2"></i>
                            Users
                        </a>
                        @endif
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-home text-white"></i>
                    <span>Home Page</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">HomePage Components:</h6>
                        <a class="collapse-item" href="{{ url('/admin/homebanner/') }}"><img class="mr-1" src="{{ asset('assets/img/Icons/Home Banner.svg') }}" width="18px" alt="">Home Banners</a>
                        <a class="collapse-item" href="{{ url('/admin/events/') }}"><img class="mr-1" src="{{ asset('assets/img/Icons/Events.svg') }}" width="18px" alt="">Events</a>
                        <a class="collapse-item" href="{{ url('/admin/category/') }}"><img class="mr-1" src="{{ asset('assets/img/Icons/Categories.svg') }}" width="18px" alt="">Categories</a>
                        <a class="collapse-item" href="{{ url('/admin/genre/') }}"><img class="mr-1" src="{{ asset('assets/img/Icons/Genre.svg') }}" width="18px" alt="">Genre</a>
                        <a class="collapse-item" href="{{ url('/admin/book/') }}"><img class="mr-1" src="{{ asset('assets/img/Icons/Book List.svg') }}" width="18px" alt="">Novel List</a>
                        <a class="collapse-item" href="{{ url('/admin/chapter/') }}"><img class="mr-1 text-dark" src="{{ asset('assets/img/Icons/Chapter List.svg') }}" width="18px" alt="">Chapter List</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <img src="{{ asset('assets/img/Icons/Orders.svg') }}" class="mr-1 mb-1" width="18px" alt="">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Orders</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Order Management:</h6>
                        <a class="collapse-item" href="{{ url('/admin/orders/') }}"><img class="mr-1 text-dark" src="{{ asset('assets/img/Icons/Order.svg') }}" width="18px" alt=""> Order List</a>
                        <a class="collapse-item" href="{{ url('/admin/gem_order/') }}"><img class="mr-1 text-dark" src="{{ asset('assets/img/Icons/Gem.svg') }}" width="18px" alt=""> Gem Orders</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Account Setting
            </div>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/profile/') }}">
                    <i class="fas fa-fw fa-user text-white"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <form method="POST" class="d-inline" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link btn" style="font-size: 14px;">
                        <i class="fas fa-right-from-bracket mr-2"></i>
                        {{-- <img class="mr-1" src="{{ asset('assets/img/Icons/logout.png') }}" width="21px" alt=""> --}}
                        <span>Logout</span>
                    </button>
                </form>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/backend/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->
