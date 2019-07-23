@extends('layouts.app')
@section('title',title_case(Auth::user()->role))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 mt-5">
            <div class="card">
                @if(session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>{{session()->get('success')}}</strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                @endif
                <div class="card-body">
                    <form  method="post" action="{{url(Auth::user()->role,['inventory','product'])}}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="subcategory">Sub-Category</label>
                        <select class="form-control form-control @error('subcategory') is-invalid @enderror" id="subcategory" name="subcategory">
                          <option>Please select Category and Sub-Category</option>
                          @foreach($category as $cData)
                                @if(count($subCateg=$subCategory->where('categ_id',$cData->id))>0)
                                    @foreach($subCateg as $subData)
                                        <option value="{{$subData->id}}" {{ old('subcategory') == $subData->id ? 'selected' : ''}}>{{$cData->name}} >> {{$subData->name}}</option>
                                    @endforeach
                                @endif
                          @endforeach
                        </select>
                        @error('subcategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                      <div class="form-row">
                            <div class="col form-group">
                                <label for="sell">Add Sell Price</label>
                                <input type="text" name="sell" class="form-control @error('sell') is-invalid @enderror" id="sell" value="{{old('sell')}}">
                                @error('sell')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col form-group">
                                <label for="buy">Add Buy Price</label>
                                <input type="text" name="buy" class="form-control @error('buy') is-invalid @enderror" id="buy" value="{{old('buy')}}">
                                @error('buy')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col form-group">
                                <label for="offer">Add Offer</label>
                                <input type="text" name="offer" class="form-control @error('offer') is-invalid @enderror" id="offer" value="{{old('offer')}}">
                                @error('offer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      </div>  
                        <div class="form-row">
                            <div class="col form-group">
                            <label for="stock">Add Stock</label>
                            <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" id="stock" value="{{old('stock')}}">
                            @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           </div>                        
                           <div class="col form-group">
                            <label for="alert">Add Alert</label>
                            <input type="text" name="alert" class="form-control @error('alert') is-invalid @enderror" id="alert" value="{{old('alert')}}">
                            @error('alert')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                       </div>
                       <label for="image">Choose file</label>
                        <div class="form-group">
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image') ? old('image') : ''}}">
                            @error('image')
                            <strong class="invalid-feedback" role="alert">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="textarea" name="description" class="form-control @error('description') is-invalid @enderror" id="description" value="{{old('description')}}"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="card-footer"> 
                    <table class="table">
                        <tr>
                            <th>Sl</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Buy</th>
                            <th>Sell</th>
                            <th>Offer</th>
                            <th>Stock</th>
                            <th>Authorized</th>
                            <th>Action</th>
                        </tr>
                        @if(count($product)>0)
                        @foreach($product as $data)
                        <tr  style="{{$data->visibility==0 ? 'opacity: 0.5' : ''}}">
                            <td class="align-middle">{{$loop->iteration}}</td>
                        
                            <td  class="align-middle"><img src="{{url($data->image)}}" class="image-fluid w-50"></td>
                        
                            <td class="align-middle">{{$data->name}}</td>
                        
                            <td class="align-middle">{{$data->code}}</td>
                        
                            <td class="align-middle">{{$data->buy}}</td>
                        
                            <td class="align-middle">{{$data->sell}}</td>
                        
                            <td class="align-middle">{{$data->offer}}</td>
                        
                            <td class="align-middle">{{$data->stock}}</td>
                        
                            <td class="align-middle">{{$data->user_id}}</td>
                            <td class="align-middle">
                                <a href="" class="btn btn-primary btn-sm" onclick="event.preventDefault(); document.getElementById('visibility-form-{{$data->id}}').submit();" ><i class="far {{$subData->visibility==0 ? 'fa-eye' : 'fa-eye-slash'}}"></i></a>
                                
                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#editModal-{{$data->id}}" ><i class="far fa-edit"></i></a>
                                
                                <a href="" class="btn btn-primary btn-sm" onclick="if(confirm('Do you want to delete {{$data->name}} category?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$data->id}}').submit();}else{event.preventDefault();  return false;} "><i class="fas fa-trash-alt"></i></a>
                                            
                                {{--============ Visibility form  ============--}}
                                <form id="visibility-form-{{$data->id}}" action="{{ url(Auth::user()->role,['inventory','product','visibility']) }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="visibility" value="{{$data->id}}">
                                </form>     
                                {{--============ Delete form  ============--}}
                                <form id="delete-form-{{$data->id}}" action="{{ url(Auth::user()->role,['inventory','product','delete']) }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="delete" value="{{$data->id}}">
                                </form>
                            </td>
                        </tr>
                        {{--############## Modal Part ##################--}}
                        <div class="modal fade" id="editModal-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">  {{$data->name}} edit</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                 </button>
                                </div>
                                <form method="POST" action="{{ url(Auth::user()->role,['inventory','product','update']) }}"  enctype="multipart/form-data"> 
                                @csrf 
                                    <input type="hidden" name="update" value="{{$data->id}}">
                                    
                                    <div class="form-group">
                                        <label for="u_category">Category</label>
                                        <select class="form-control form-control @error('u_category') is-invalid @enderror" id="u_category" name="u_category">
                                          <option>Please select Category and Sub-Category</option>
                                          @foreach($category as $cData)
                                                @if(count($subCateg=$subCategory->where('categ_id',$cData->id))>0)
                                                    @foreach($subCateg as $subData)
                                                        <option value="{{$subData->id}}" {{ old('u_category') == $subData->id || ($subData->id == $data->sub_id) ?  'selected' : ''}}>{{$cData->name}} >> {{$subData->name}}</option>
                                                    @endforeach
                                                @endif
                                          @endforeach
                                        </select>
                                        @error('u_category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                            <div class="col form-group">
                                                <label for="u_name">Name</label>
                                                <input type="text" name="u_name" class="form-control @error('u_name') is-invalid @enderror" id="name" value="{{old('u_name') ? old('u_name') : $data->name}}">
                                                @error('u_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="u_sell">Add Sell Price</label>
                                                <input type="text" name="u_sell" class="form-control @error('u_sell') is-invalid @enderror" id="sell" value="{{old('u_sell') ? old('u_sell') : $data->sell}}">
                                                @error('sell')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="u_buy">Add Buy Price</label>
                                                <input type="text" name="u_buy" class="form-control @error('u_buy') 'is-invalid' @enderror" id="u_buy" value="{{old('u_buy') ? old('u_buy') : $data->buy}}">
                                                @error('u_buy')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col form-group">
                                                <label for="u_offer">Add Offer</label>
                                                <input type="text" name="u_offer" class="form-control @error('u_offer') is-invalid @enderror" id="u_offer" value="{{old('u_offer') ? old('u_offer') : $data->offer}}">
                                                @error('u_offer')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    </div>  
                                    <div class="form-row">
                                          <div class="col form-group">
                                            <label for="u_stock">Add Stock</label>
                                            <input type="text" name="u_stock" class="form-control @error('u_stock') is-invalid @enderror" id="u_stock" value="{{old('u_stock') ? old('u_stock') : $data->stock}}">
                                            @error('u_stock')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                           </div>                        
                                           <div class="col form-group">
                                            <label for="u_alert">Add Alert</label>
                                            <input type="text" name="u_alert" class="form-control @error('alert') is-invalid @enderror" id="alert" value="{{old('u_alert') ? old('u_alert') : $data->alert}}">
                                            @error('alert')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                           </div>
                                    </div>
                                    <label for="u_image">Choose file</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file @error('u_image') is-invalid @enderror" id="u_image" name="u_image" value="{{old('u_image') ? old('u_image') : ''}}">
                                        @error('u_image')
                                        <strong class="invalid-feedback" role="alert">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="u_description">Description</label>
                                        <textarea type="textarea" name="u_description" class="form-control @error('u_description') is-invalid @enderror" id="u_description" value="{{old('u_description') ? old('u_description') : $data->description}}"></textarea>
                                        @error('u_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                          </div>
                        </div>
                        
                        @endforeach
                        @else
                        <tr>
                            <td colspan="9">Their have no products yet</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
