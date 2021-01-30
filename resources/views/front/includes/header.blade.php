<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="{{route('public.index')}}" class="navbar-brand text-uppercase font-weight-bold">Store Shop</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{route('public.index')}}" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#about" class="nav-link text-uppercase font-weight-bold">About</a></li>
                    <li class="nav-item"><a href="#gallery" class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    @if(!Auth::user())
                        <li class="nav-item"><a href="{{route('public.login')}}" class="nav-link text-uppercase font-weight-bold">Login</a></li>
                        <li class="nav-item"><a href="{{route('public.register')}}" class="nav-link text-uppercase font-weight-bold">Register</a></li>
                    @else
                        <li class="dropdown" style="padding-top: 8px;font-family: 'Franklin Gothic Medium';font-size: 18px;font-weight: bold;margin-left: 10px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="fa fa-angle-down">{{ Auth::user()->name }}</b></a>
                            <ul class="dropdown-menu" style="background-color: #4a5568;">
                                <li><a href="{{route('logout')}}" style="margin-left: 5px;color:white;font-weight: normal"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>

