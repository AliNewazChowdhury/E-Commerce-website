@extends('layouts.app')
@section('title',title_case(Auth::user()->role))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
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
                    <form  method="post" action="{{url(Auth::user()->role,['inventory','category'])}}" >
                        @csrf
                      <div class="form-group">
                        <label for="name">Add Category Name</label>
                        <input type="" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}">
                        @error('name')
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
                            <th>sl</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Authorized</th>
                            <th>Action</th>
                        </tr>
                        @if(count($category)>0)
                        @foreach($category as $data)
                        <tr  style="{{$data->visibility==0 ? 'opacity: .5' : '' }};">
                            <td>{{$loop->iteration}}</td>
                        
                            <td>{{$data->name}}</td>
                       
                            <td>{{$data->slug}}</td>
                       
                            <td>{{$data->cUser->name}}</td>
                       
                            <td>
                                <a href="" class="btn btn-primary btn-sm" onclick="event.preventDefault(); document.getElementById('visibility-form-{{$data->id}}').submit();" ><i class="far {{$data->visibility==0 ? 'fa-eye' : 'fa-eye-slash'}}"></i></a>
                                
                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                                data-target="#editModal-{{$data->id}}" ><i class="far fa-edit"></i></a>
                                
                                <a href="" class="btn btn-primary btn-sm" onclick="if(confirm('Do you want to delete {{$data->name}} category?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$data->id}}').submit();}else{event.preventDefault();  return false;} "><i class="fas fa-trash-alt"></i></a>
                                            
                                {{--============ Visibility form  ============--}}
                                <form id="visibility-form-{{$data->id}}" action="{{ url(Auth::user()->role,['inventory','category','visibility']) }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="visibility" value="{{$data->id}}">
                                </form>     
                                {{--============ Delete form  ============--}}
                                <form id="delete-form-{{$data->id}}" action="{{ url(Auth::user()->role,['inventory','category','delete']) }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="delete" value="{{$data->id}}">
                                </form>
                            </td>
                            <div class="modal fade" id="editModal-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$data->name}} edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                    <form action="{{ url(Auth::user()->role,['inventory','category','update']) }}" method="POST">  
                                        <input type="hidden" name="update" value="{{$data->id}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="u_name">Add Category Name</label>
                                            <input type="" name="u_name" class="form-control @error('u_name') is-invalid @enderror" id="u_name" value="{{old('u_name') ?  old('u_name'): $data->name}}">
                                            @error('name')
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
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5">Their have no category yet</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
