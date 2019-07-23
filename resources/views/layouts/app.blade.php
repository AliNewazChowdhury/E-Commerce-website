<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ecommerce Template Design">
    <meta name="keywords" content="ecommerce template design">
    <meta name="author" content="Sayed Rubel">
    <title>@yield('title') | SR Shop</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="{{asset('public')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public')}}/css/style.css">

</head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
   <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    @auth
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky accordion mt-2" id="dashboardMenu">
        <ul class="nav flex-column">
            <li class="nav-item" >
            <a class="nav-link {{Request::is('home') ? 'active' : ''}}" href="{{url('home')}}">
              <span data-feather="home"></span>
              {{$role=auth::user()->role}} 
            </a>
          @if($role=='admin')
          <li class="nav-item" >
            <a class="nav-link {{Request::is('*/inventory/*') ? 'active' : ''}}" data-toggle="collapse" data-target="#product" href="#">
              Product group
            </a>
            <div id="product" class="collapse {{Request::is('*/inventory/*') ? 'show' : ''}}" data-parent="#dashboardMenu">
                <ul class="list-group list-group-flush">          
                    <li class="nav-item list-group-item">
                        <a class="nav-link {{Request::is('*/inventory/category') ? 'active' : ''}}" href="{{url($role,['inventory','category'])}}">
                          <span data-feather="file"></span>
                          Category
                        </a>
                    </li>
                    <li class="nav-item list-group-item">
                        <a class="nav-link {{Request::is('*/inventory/sub-category') ? 'active' : ''}}" href="{{url($role,['inventory','sub-category'])}}">
                          <span data-feather="file"></span>
                          Sub-Category
                        </a>
                    </li>
                    <li class="nav-item list-group-item">
                        <a class="nav-link {{Request::is('*/inventory/product') ? 'active' : ''}}" href="{{url($role,['inventory','product'])}}">
                          <span data-feather="file"></span>
                          Product
                        </a>
                    </li>
                </ul>
            </div>
          </li>
          @endif
          <li class="nav-item" >
            <a class="nav-link {{Request::is('*/profile/*') ? 'active' : ''}}" data-toggle="collapse" data-target="#collapseOne" href="#">
              Settings <span class="sr-only">(current)</span>
            </a>
            <div id="collapseOne" class="collapse {{Request::is('*/profile/*') ? 'show' : ''}}" data-parent="#dashboardMenu">
                <ul class="list-group list-group-flush">          
                    <li class="nav-item list-group-item">
                        <a class="nav-link" href="{{url($role,['profile','view'])}}">
                          <span data-feather="file"></span>
                          Profile
                        </a>
                    </li>
                    <li class="nav-item list-group-item">
                        <a class="nav-link" href="#">
                          <span data-feather="file"></span>
                          Reset password
                        </a>
                    </li>
                </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>
      </div>
    </nav>
    @endauth
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-3 mb-3 border-bottom">
            @yield('content')
        </div>
    </main>
  </div>
</div>

<!-- Scripts -->
<script src="{{asset('public')}}/js/jquery-3.3.1.js"></script>
<script src="{{asset('public')}}/js/popper.min.js"></script>
<script src="{{asset('public')}}/js/bootstrap.min.js"></script>
</body>
</html>
