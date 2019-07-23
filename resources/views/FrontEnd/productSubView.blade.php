@extends('FrontEnd.layouts.app')
@section('title','Details')
@section('content')
<section id="featuredProduts" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{$breadCrumb['categ']}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$breadCrumb['sub']}}</li>
                  </ol>
                </nav>
            </div>
        </div>
        <div id="Clothing" class="tabcontent" style="display: block;">
            <div class="row">
                @if(count($subProduct)>0)
                @foreach($subProduct as $data)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{url($data->image)}}" style="height: 200px;" alt="" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3 class="card-title"><a href="{{url($data->code,[$data->categ->slug,$data->subCateg->slug,$data->slug])}}">{{$data->name}}</a></h3>
                            <p class="card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></p>
                            <p class="card-text">{{$data->sell}}</p>
                        </div>
                        <div class="card-footer btn-group">
                            <button class="btn btn-sm"><i class="fas fa-cart-arrow-down px-3"></i></button>
                            <button class="btn btn-sm"><i class="fas fa-heart px-3"></i></button>
                            <button class="btn btn-sm"><i class="fas fa-chart-line px-3"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach
                @else

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
              @endif
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    $(document).ready(function(){
        $('#contactModal').modal('show');
    });
</script>

