@php
    $nav = false;
@endphp
@extends('layouts.app')

@section('content')


<div class="main-container">

    <!-- Begin page content -->
    <div class="container">
        <div class="card rounded-2 border-0 mb-3 z3 signin-block">
            <div class="card-body pr-5 pl-5">
                <h1 class="display-4 text-center d-block">Sign in</h1>
                <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-group text-left float-label">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror">
                    <label>Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-left float-label">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    <label>Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1"> Remember Me</label>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary btn-block col">Login</button>
                    <br>
                </div>
                </form>
           
            </div>
        </div>
    </div>
</div>

 
@endsection
