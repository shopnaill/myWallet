@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new project') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('project.save')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>
 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" class="form-control " name="description" value="{{ old('description') }}" required autocomplete="email" autofocus>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                  <select class="form-control" name="type" id="type">
                                    <option value="1">Web</option>    
                                    <option value="2">Mobile</option>    
                                    <option value="3">Other</option>    
                                  </select>                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Client') }}</label>

                            <div class="col-md-6">
                                  <select class="form-control" name="user_id" id="user_id">
                                    <option value="1">select client...</option>    
                                      @foreach ($users as $user)
                                      <option value="{{$user->id}}">{{$user->name}}</option>    
                                      @endforeach
 
                                  </select>                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>

                            <div class="col-md-6">
                                <input id="link" type="textarea" class="form-control " name="link" value="{{ old('link') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
