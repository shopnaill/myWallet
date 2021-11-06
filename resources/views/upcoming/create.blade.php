 
  
  <!-- Modal -->
  <div class="modal fade" id="AddUpcoming" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="createUpcoming"  >
            @csrf
        <div class="modal-body">


                <div class="form-group row">
                    <label for="start_at" class="col-md-4 col-form-label text-md-right">{{ __('Start at') }}</label>

                    <div class="col-md-6">
                        <input id="start_at" type="date"  class="form-control " name="start_at" value="{{ old('start_at') }}" required   autofocus>

                    </div>
                 </div>
                   
                  <div class="form-group row">
                    <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>

                    <div class="col-md-6">
                        <input id="amount" type="number" step="0.01" class="form-control " name="amount" value="{{ old('amount') }}" required   autofocus>

                    </div>
                  </div>

                <div class="form-group row">
                    <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                    <div class="col-md-6">
                        <input id="info" type="textarea" class="form-control " name="info" value="{{ old('info') }}"    autofocus>
                     
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                    <div class="col-md-6">
                        <select name="type" class="form-control " id="type">
                            <option value="1">Withdraw</option>
                            <option value="2">Addation</option>
                        </select>
                    </div>
                </div>
 
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="update_user" class="btn btn-primary">Create</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  