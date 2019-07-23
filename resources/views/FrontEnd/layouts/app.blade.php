
@php
 $category = App\ProductCategory::where('visibility',1)->get();
 $subcategory = App\ProductSubCategory::where('visibility',1)->get();
 
 if(Auth::user()){
 $user =App\User::where('id',Auth::user()->id)->first();
 $cartSelection =App\CartSelection::where('user_id',Auth::user()->id)->get();

 }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Ecommerce Template Design">
    <meta name="keywords" content="ecommerce template design">
    <meta name="author" content="Ali Newaz">
    <title>@yield('title') | SR Shop</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="{{asset('public')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public')}}/css/style.css">

</head>
<body>
    <!-- Header -->
    <header>
        <!-- Header Part 1: Topbar -->
        <div id="topbar">
            <div class="container custom-topbar">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline  pt-2">
                            <li class="list-inline-item dropdown">
                                <a href="" class="dropdown-toggle text-decoration-none text-secondary text-uppercase px-1" data-toggle="dropdown">One</a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">usd</a>
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">inr</a>
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">gbp</a>
                                </div>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a href="" class="dropdown-toggle text-decoration-none text-secondary text-uppercase px-1" data-toggle="dropdown">Two</a>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">English</a>
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">Bangla</a>
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">French</a>
                                    <a href="" class="dropdown-item text-decoration-none text-secondary text-uppercase">German</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pt-2">
                            <li class="list-inline-item"><a href="{{route('register')}}" class="text-decoration-none text-secondary text-uppercase"><i class="icon fa fa-user pr-1"></i>Create Account</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-secondary text-uppercase"><i class="icon fa fa-heart pr-1"></i>Wishlist</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-secondary text-uppercase"><i class="icon fa fa-shopping-cart pr-1"></i>My Cart</a></li>
                            <li class="list-inline-item"><a href="#" class="text-decoration-none text-secondary text-uppercase"><i class="icon fa fa-check pr-1"></i>Checkout</a></li>
                            <li class="list-inline-item"><a href="{{route('login')}}" class="text-decoration-none text-secondary text-uppercase"><i class="icon fa fa-lock pr-1"></i>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Part 2: Middlebar -->
        <div id="middlebar" class="py-3">
            <div class="container custom-middlebar">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="" class="text-decoration-none text-dark h1"><span class="text-success">SR</span> Shop</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-row align-items-center">
                                <label for="" class="sr-only">Search Item</label>
                                <div class="input-group mb-2">
                                    <div class="input-gropu-prepend">
                                        <select class="input-group-text rounded-0" name="" id="">
                                            <option value="">Categories</option>
                                            <option value="">One</option>
                                            <option value="">Two</option>
                                            <option value="">Three</option>
                                            <option value="">Four</option>
                                            <option value="">Five</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search Items">
                                    <div class="input-gropu-prepend">
                                        <button class="input-group-text rounded-0" >Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        @if(Auth::user())
                        <a href="{{url($user->role,['cart','products'])}}" class="h3"><i class="fas fa-cart-arrow-down badge badge-pill badge-primary">{{count($cartSelection)}}</i></a>
                        </form>
                        @else
                        <a href="#" class="h3"><i class="fas fa-cart-arrow-down badge badge-pill badge-primary">0</i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Part 3: Main Navbar -->
        <div id="navbarId" class="border-bottom border-success">
            <div class="container custom-navbar">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"><span class="navbar-toggler-icon bg-secondary"></span></button>
                    <div class="collapse navbar-collapse" id="mainNavbar">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a href="" class="nav-link text-decoration-none text-dark text-uppercase">Home</a></li>
                           @foreach($category as $categ_data)

                            @php
                            $targetSub=$subcategory->where('categ_id',$categ_data->id);
                            $totalSub=count($targetSub);
                            if($totalSub%2==0){
                                $firstSubLoop=$totalSub/2;
                                $secondSubLoop=$firstSubLoop;

                                }else{
                                
                                $firstSubLoop=ceil($totalSub/2);
                                $secondSubLoop=$totalSub-$firstSubLoop;
                            }
                            @endphp                            
                            <li class="nav-item dropdown"><a href="" class="nav-link text-decoration-none text-dark text-uppercase {{$totalSub>0 ? 'dropdown-toggle' : ''}} " data-toggle="dropdown" id="clothingDropdown">{{$categ_data->name}}</a>
                                @if($totalSub > 0)
                                <div class="dropdown-menu custom-menu">
                                    <div class="row">
                                        <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                            <li><h3>Start</h3></li>
                                            @foreach($targetSub->take($firstSubLoop) as $subcateg_data)

                                            <li><a href="{{url($categ_data->slug.'/'.$subcateg_data->slug)}}">{{$subcateg_data->name}}</a></li>

                                            @endforeach
                                            
                                        </ul>
                                        <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                            <li><h3>Start</h3></li> 
                                            @foreach($targetSub->take('-'.$secondSubLoop) as $subcateg_data)

                                            <li><a href="{{url($categ_data->slug.'/'.$subcateg_data->slug)}}">{{$subcateg_data->name}}</a></li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </li>
                           @endforeach
                                
                            
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>

        @yield('content')

    </main>

    <!-- Footer -->
    <footer class="pt-5">
        <div class="container">
            <div class="row text-center border-top border-bottom py-3">
                <div class="col-md-4">
                    <p class="h1">Sign up to Newletter</p>
                    <p>Get 40% off on selected items!!</p>
                </div>
                <div class="col-md-8">
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="subscribe" class="sr-only">Subscribe</label>
                            <input type="email" class="form-control" id="subscribe" placeholder="Enter Email...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-3">
                    <p>Contact Us</p>
                    <div class="media">
                        <img src="images/next.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <p>124/ca, Tejgaon, Dhaka, 1215</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="images/next.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <p>+(888) 123-4567 <br>+(888) 456-7890</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="images/next.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <p>Evalia@themesground.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Customer Service</p>
                    <div class="media">
                        <div class="media-body">
                            <p>My Account</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Order History</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>FAQ</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Specials</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Help Center</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Corporation</p>
                    <div class="media">
                        <div class="media-body">
                            <p>My Account</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Order History</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>FAQ</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Specials</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Help Center</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Why Choose Us</p>
                    <div class="media">
                        <div class="media-body">
                            <p>My Account</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Order History</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>FAQ</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Specials</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <p>Help Center</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footerId" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        All reserved goes to &copy; Ali Newaz Chowdhury
                    </div>
                    <div class="col-md-6">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-pinterest-square"></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google-plus-square"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modals -->
    <div class="modal fade" id="login">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="role" value="">
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>    

    <!-- Scripts -->
    <script src="{{asset('public')}}/js/jquery-3.3.1.js"></script>
    <script src="{{asset('public')}}/js/popper.min.js"></script>
    <script src="{{asset('public')}}/js/bootstrap.min.js"></script>
    @stack('script') 
    <!-- Custom Scripts -->
    <script>
        // Scripts for new products tab
        function openProducts(evt, productName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(productName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>




   

