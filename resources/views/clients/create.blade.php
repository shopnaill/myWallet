@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new project') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('client.save')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Client name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>
 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control " name="phone" value="{{ old('phone') }}" required autocomplete="email" autofocus>
                             
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
