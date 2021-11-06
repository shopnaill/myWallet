@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Withdraw from wallet.') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('wallet.save_withdraw')}}">
                        @csrf

                          <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" step="0.01" class="form-control " name="amount" value="{{ old('amount') }}" required   autofocus>
                                 <br> <span >my current wallet <strong style="color: green">{{$my_wallet}} EGP</strong></span>
 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="purchase" class="col-md-4 col-form-label text-md-right">{{ __('Purchase Type') }}</label>

                            <div class="col-md-6">
                              <select class="form-control" name="purchase" id="purchase">
                                  @foreach ($purchase_type as $item)
                                       <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endforeach
                              </select>
                             
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('Info') }}</label>

                            <div class="col-md-6">
                                <input id="info" type="textarea" class="form-control " name="info" value="{{ old('info') }}"    autofocus>
                             
                            </div>
                        </div>
 
                

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Withdraw') }}
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
