
            
<!-- Main Header -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    @section('adminlte_css_pre')
        <link rel="stylesheet" href="{{ asset('assets/css/custom-burger.css')}}">
    @endsection
    
        <ul class="navbar-nav">
            <div class="hamburger">
                <a class="" data-enable-remember="true" data-widget="pushmenu" href="#" role="button">
                    <i class="fa-solid fa-burger"></i>
                </a>
            </div>
        </ul>
    
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
    
                
                <a href="#" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                    <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
    
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right"  aria-labelledby="dropdownMenuButton">
                    <!-- User image -->
                    <li class="user-header bg-primary dropdown-item">
                        <img src="https://assets.infyom.com/logo/blue_logo_150x150.png" class="img-circle elevation-2" alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Membro desde de {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer dropdown-item">
                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                        <a href="#" class="btn btn-default btn-flat float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    
    