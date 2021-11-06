<!-- Modal -->
  <div class="modal fade" id="AddBalance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Add Money To Wallet') }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
 
        <div class="modal-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
              
                        <div class="card-body">
                            <form method="POST" action="{{route('wallet.save')}}">
                                @csrf
            
                                  <div class="form-group row">
                                    <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
            
                                    <div class="col-md-6">
                                        <input id="amount" type="number" step="0.01" class="form-control " name="amount" value="{{ old('amount') }}" required   autofocus>
            
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
    </div>
  </div>
  


