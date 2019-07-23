@extends('FrontEnd.layouts.app')
@section('title','Home')
@section('content')
<!-- Section: Categories and Slider -->
<section id="categoriesAndSlider" class="pt-5">
    <div class="container">
        <div class="row">
            <!-- Categories -->
            <div class="col-md-4">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item active text-uppercase"><i class="icon fa fa-align-justify fa-fw"></i> Categories</li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown" ><i class="icon fa fa-laptop"></i> Electronics</a>
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-futbol"></i> Sports</a> 
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown"><i class="fas fa-heartbeat"></i> Health and Beauty</a>
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ring"></i> Jewellery</a>
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown"><i class="far fa-clock"></i> Watches</a>
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item nav-item dropright">
                        <a href="" class="nav-link text-decoration-none text-dark dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i> Shoes</a>
                        <div class="dropdown-menu custom-menu">
                            <div class="row">
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                                <ul class="list-unstyled col-lg-3 col-sm-6" role="menu">
                                    <li><h3>Start</h3></li> 
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more link</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Slider -->
            <div class="col-md-8">
                <div class="bd-example">
                    <div id="sliderId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#sliderId" data-slide-to="0" class="active"></li>
                        <li data-target="#sliderId" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('public')}}/images/sliders/01.jpg" class="d-block w-100" alt="Slider Image">
                                <div class="carousel-caption d-none d-md-block text-left">
                                    <p class="text-dark h2">Latest Products</p>
                                    <p class="text-dark display-4">Modern Chair</p>
                                    <p class="text-dark h4">Get 50% off on this item</p>
                                    <button class="btn btn-primary mt-2">Shop Now</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('public')}}/images/sliders/02.jpg" class="d-block w-100" alt="Slider Image">
                                <div class="carousel-caption d-none d-md-block text-left">
                                    <p class="text-dark h2">Latest Products</p>
                                    <p class="text-dark display-4">Modern Chair</p>
                                    <p class="text-dark h4">Get 50% off on this item</p>
                                    <button class="btn btn-primary mt-2">Shop Now</button>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#sliderId" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#sliderId" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Banner -->
<section id="bannerId" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src="{{asset('public')}}/images/banners/home-banner1.jpg" alt="Banner Image"></div>
            <div class="col-md-6"><img class="img-fluid" src="{{asset('public')}}/images/banners/home-banner2.jpg" alt="Banner Image"></div>
        </div>
    </div>
</section>
<style >
    #defaultOpen{
        background-color: blue;
    }
</style>
<!-- Section: New Products -->
<section id="newProducts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand">
                    <a href="" class="navbar-brand">New Products</a>
                    <div class="collapse navbar-collapse tab">
                        <ul class="navbar-nav ml-auto">
                            @if(count($categ)>0)
                            @foreach($categ as $categData)
                            <li class="nav-item btn btn-primary tablinks" onclick="openProducts(event, '{{$categData->slug}}')" {{$loop->iteration == 1 ? 'id="defaultOpen"' : ''}}>{{$categData->name}}</li>
                            @endforeach
                            @else
                            <li class="nav-item btn btn-primary tablinks" onclick="openProducts(event,'')" id="defaultOpen">clothing</li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @if(count($categ)>0)
            @foreach($categ as $tabData)
            <div id="{{$tabData->slug}}" class="tabcontent">
                <div class="row">
                    @foreach($product->where('categ_id',$tabData->id) as $tabProduct)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{url($tabProduct->image)}}" alt="" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h3 class="card-title">{{$tabProduct->name}}</h3>
                                <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                                <p class="card-text">{{$tabProduct->sell}}</p>
                            </div>
                            <div class="card-footer btn-group">
                                <button class="btn btn-sm"><i class="fas fa-cart-arrow-down px-3"></i></button>
                                <button class="btn btn-sm"><i class="fas fa-heart px-3"></i></button>
                                <button class="btn btn-sm"><i class="fas fa-chart-line px-3"></i></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @else
        <div id="Clothing" class="tabcontent">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Electronics" class="tabcontent">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p5.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p5.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p5.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p5.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Shoes" class="tabcontent">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title">Product Name</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">$450.99</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button><i class="fas fa-heart px-3"></i></button>
                            <button><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<!-- Section: Featured Products -->
<section id="featuredProducts" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><a href="">Featured Products</a></p>
            </div>
        </div>
        <div class="row">
            @if(count($product)>0)
            @foreach($product as $p_data)
                <div class="col-lg-2 col-md-3 col-sm-4 col-sm-6 mt-3">
                    <div class="card">
                        <img src="{{url($p_data->image)}}" alt="" class="card-img-top img-fluid" style="height: 200px;">
                        <div class="card-body">
                            <h3 class="card-title">{{$p_data->name}}</h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">{{$p_data->sell}}BDT</p>
                        </div>
                        <div class="card-footer">
                            <button><i class="fas fa-cart-arrow-down "></i></button>
                            <button><i class="fas fa-heart "></i></button>
                            <button><i class="fas fa-chart-line "></i></button>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h3 class="card-title">Product Name</h3>
                        <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                        <p class="card-text">$450.99</p>
                    </div>
                    <div class="card-footer">
                        <button><i class="fas fa-cart-arrow-down "></i></button>
                        <button><i class="fas fa-heart "></i></button>
                        <button><i class="fas fa-chart-line "></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h3 class="card-title">Product Name</h3>
                        <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                        <p class="card-text">$450.99</p>
                    </div>
                    <div class="card-footer">
                        <button><i class="fas fa-cart-arrow-down "></i></button>
                        <button><i class="fas fa-heart "></i></button>
                        <button><i class="fas fa-chart-line "></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('public')}}/images/hot-deals/p10.jpg" alt="" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h3 class="card-title">Product Name</h3>
                        <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                        <p class="card-text">$450.99</p>
                    </div>
                    <div class="card-footer">
                        <button><i class="fas fa-cart-arrow-down "></i></button>
                        <button><i class="fas fa-heart "></i></button>
                        <button><i class="fas fa-chart-line "></i></button>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<section id="contactPage" class="py-5 table-secondary">
    <div class="container" >
        <div class="row">
            <div class="col-sm-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.9553215425794!2d90.38688675700872!3d23.75056568698346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb51884d03%3A0xa8faf6fd1f993941!2z4KaH4KaJIOCmj-CmuCDgprjgpqvgpp_gppPgpq_gprzgp43gpq_gpr7gprAg4Kay4Ka_4Kau4Ka_4Kaf4KeH4Kah!5e0!3m2!1sbn!2sbd!4v1551703727983" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-7 text-sm-left text-center" style="background-image:url({{asset('public')}}/googleMap.png);">
                <h4 class="w-100 border-bottom border-warning pt-2 mb-4">If you have any query? Please feel free to send a message...</h4>
                <form method="POST" action="{{ url('contact-us') }}">
                        @csrf
                    <div class="form-row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="info_name" class="form-control @error('info_name') is-invalid @enderror" value="{{old('info_name')}}" id="name" placeholder="Your Name">
                            @error('info_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="info_phone" class="form-control @error('info_phone') is-invalid @enderror" value="{{old('info_name')}}" id="phone" placeholder="Enter Phone Number">
                            @error('info_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="info_email" class="form-control @error('info_email') is-invalid @enderror" value="{{old('info_email')}}" id="info_email" placeholder="Enter Email">
                            @error('info_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <select name="info_subject">
                                <option value="general" {{old('info_subject')== 'general' ? 'selected' : ''}}  >General Query</option>
                                <option value="training" {{old('info_subject')== 'training' ? 'selected' : ''}} >Training Query</option>
                                <option value="payment" {{old('info_subject')== 'payment' ? 'selected' : ''}}>Payment Query</option>
                            </select>
                            @error('info_subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="info_msg" class="form-control  @error('info_msg') is-invalid @enderror" id="msg" rows="3" placeholder="Write Your Message" style="min-height:93px;">{{old('info_msg')}}</textarea>
                            @error('info_msg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                       </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
{{-- contact modal  --}}
@if(session('contactMessage'))
<div class="modal fade" id="contactModal" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {!! session('contactMessage') !!}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endif
@push('script')
<script >
        $('#contactModal').modal('show');
</script>
@endpush
@endsection()


