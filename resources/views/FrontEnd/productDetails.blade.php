@extends('FrontEnd.layouts.app')
@section('title','Details')
@section('content')
   <section id="details">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{$product->categ->name}}</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$product->subCateg->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                          </ol>
                        </nav>
                        <div class="card mb-3 mt-5">
                            <div class="card-header">
                                @if(Session::has('success'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>{!!session('success')!!}</strong>
                                </div>
                                @endif
                                @if(Session::has('alert'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>{!!session('alert')!!}</strong>
                                </div>
                                @endif
                                
                            </div>
                            <div class="card-body">
                                <div class="media mb-2">
                                    <img src="{{url($product->image)}}" alt="" class="mr-5 w-50 h-50">
                                    <div class="media-body">
                                        <div class="mt-0">
                                            <p class="h1"><a href="" class="text-decoration-none">{{$product->name}}</a></p>
                                            <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="ml-2">(20 Reviews)</span></p>
                                            <p class="text-muted">Availability: <span class="lead text-success">In Stock</span></p>
                                            <p class="text-muted border-bottom pb-5">{{$product->description}}</p>
                                            @if($product->offer != null)
                                                <p class="h1">Offer Price: {{$product->sell - $product->offer}}/-BDT</p>
                                            @endif
                                                <p class="text-muted">Regular Price: 
                                            @if($product->offer != null)
                                                <del>{{$product->sell}}</del>
                                            @else
                                                {{$product->sell}}/-BDT
                                            @endif
                                            </p>
                                            <form class="form-inline" method="post">
                                                @csrf
                                                <input type="hidden" name="code" value="{{$product->code}}">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="entity" class="sr-only">Entity</label>
                                                    <input type="number" name="quantity" class="form-control" value="1" id="entity" min="1" placeholder="Number of products">
                                                </div>
                                                @auth
                                                <button type="submit" name="cart" class="btn btn-primary mb-2">Add to Cart</button>
                                                @else
                                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#login">Add to Cart</button>
                                                @endauth

                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button trigger modal -->

        
@endsection()
<script>
    $(document).ready(function(){
        $('#contactModal').modal('show');
    });
</script>

