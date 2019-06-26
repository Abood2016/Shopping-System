<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">GazaShop</a>      
        <a href="{{ route('front.index') }}" class="btn btn-warning btn-lg float-right" style="color:#000"> SHOP NOW!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Cart <strong>(23)</strong>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{auth()->check() ? auth()->user()->name : 'Account'}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if(!auth()->check())
                        <a class="dropdown-item " href="{{ route('user.login') }}">Sign In</a>
                        <a class="dropdown-item" href="{{ route('user.register') }}">Sign Up</a>
                        @else
                        <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                        <a class="dropdown-item" href="{{ route('user.profile') }}">MyProfile</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>