@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new Balance') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('balance.save')}}">
                        @csrf

                        <input type="hidden" name="project_id" value="{{$project_id}}">
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" class="form-control " name="price" value="{{ old('price') }}" required   autofocus>
 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('Info') }}</label>

                            <div class="col-md-6">
                                <input id="info" type="textarea" class="form-control " name="info" value="{{ old('info') }}"    autofocus>
                             
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control " name="date" value="{{ old('date') }}" required   autofocus>
                             
                            </div>
                        </div>
 
                        <div class="form-group row">
 
                            <div  class="col-md-12 text-center">
                                <input id="wallet" type="checkbox" class="" name="wallet" value="{{ old('wallet') }}"  >
                                <label for="wallet">{{ __('Don"t Update Wallet.') }}</label>
                             
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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
