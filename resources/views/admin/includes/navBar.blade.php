<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <h1 style="margin-top: 2px;color:white;">STORE SHOP</h1>
        </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
            </a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                <li class="divider"></li>
                <li><a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-user"></i> Users <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-1" class="collapse">
                    <li><a href="{{route('admin.user.index')}}"><i class="fa fa-angle-double-right"></i> All Users</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-cube" aria-hidden="true"></i>  Products <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-2" class="collapse">
                    <li><a href="{{route('admin.product.index')}}"><i class="fa fa-angle-double-right"></i> All Products</a></li>
                    <li><a href="{{route('admin.product.create')}}"><i class="fa fa-angle-double-right"></i> Create New</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-university" aria-hidden="true"></i> Stores <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                <ul id="submenu-2" class="collapse">
                    <li><a href="{{route('admin.store.index')}}"><i class="fa fa-angle-double-right"></i> All Stores</a></li>
                    <li><a href="{{route('admin.store.create')}}"><i class="fa fa-angle-double-right"></i> Create New</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-user-plus"></i>  Url </a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>


