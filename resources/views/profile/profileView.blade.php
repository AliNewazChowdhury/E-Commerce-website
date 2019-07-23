@extends('layouts.app')
@section('title','Profie')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        @php
            $user=Auth::user();
        @endphp
        <div class="col-md-11">
            <div class="card">
                <div class="card-header display-4">{{title_case(Auth::user()->name)}}</div>

                <div class="card-body">
                  @if(session()->has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>{{session()->get('success')}}</strong> 
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                   @endif
                    <table class="table table-hover">
                        <tr>
                            <td class="table-secondary" colspan="2">Basic Information</td>
                        </tr>
                        <tr>
                            <td class="" >
                            	<div class="card">
                            		<img class="mx-auto" src="{{$user->image!=null ? url($user->image) : asset('public/images/profile.png')}}" style="height: 150px; width: auto;">
                          		</div>
                            </td>
                            <td class="">
                            	<form method="post" action="{{url($user->role,['profile','image'])}}" enctype="multipart/form-data">
                            		@csrf
								    <label for="image">Choose file</label>

									<div class="form-group">
									    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image') ? old('image'):$user->image}}">
									    @error('image')
									    <strong class="invalid-feedback" role="alert">{{$message}}</strong>
									    @enderror
									</div>

									<button type="submit" class="btn btn-success btn-block">Upload you'r photo</button>
                            	</form>
                            </td>
                        
                        </tr>

                        <tr>
                            <td >Name</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td >E-mail</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td >Phone</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <td >Address</td>
                            <td>{{$user->address}}</td>
                        </tr>
                        

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
