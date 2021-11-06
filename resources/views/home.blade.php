@extends('layouts.app')
<style>
    .c-btn
    {
		border-radius: 50%!important;
		 width: 30px;
		  height: 30px; 
		  text-align: center!important;
		   font-size: 10px!important;
		 padding: 0px !important;
		  padding-top: 8px !important;
		   position: absolute; 
		   right: 38px ;
		    top: 17px ;
    }

 
.badge-pill {
   
    position: absolute!important;
    right: 3px!important;
    top: 3px!important;
    margin: 0px!important;
}
</style>
@section('content')



		<!-- main container starts -->
		<div class="main-container">
			<div class="container-fluid bg-purple position-relative pb-4">
				<div class="row">
					<div class="container pt-2 pb-5">
						<div class="row page-title-row">
							<div class="col-8 col-md-6">
								<h2 class="page-title text-white">Dashboard</h2>
								<p class="text-white">Welcome {{ Auth::user()->name }}</p>
							</div>
							<div class="col-4 col-md-6 text-right align-self-center">
							 
								<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" title="" id="color-setting" data-original-title="Setting">
									<i class="fa fa-cogs"></i>
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Begin page content -->
			<div class="container">
                
               @include('cards')

                <h4 class="f-light text-center py-4 mb-3">Total Number of Earnings: This year <b>256015</b>, This month <b>46523</b></h4>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-3">
						<div class="card rounded-0 border-0 h-100">
							<div class="card-header">
								<div type="button" data-toggle="modal" data-target="#AddBalance" class="btn btn-success"><i class="fa fa-plus"></i></div>
								<div type="button" data-toggle="modal" data-target="#WithdrawBalance" class="btn btn-danger"><i class="fa fa-minus"></i></div>
 							</div>
							<div class="card-body text-center"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="{{asset('imgs/saved_resource.html')}}"></iframe>
								<a style="color: #333;text-decoration: none;" href="{{route('wallet')}}">
									<p>My current balance</p>
									<h1 class="card-title">{{$my_wallet}} EGP</h1>
								  </a>
 								<p class="text-secondary mb-3">Partner Companies</p>
								<canvas id="donutchart-area" class="text-primary mb-3" width="265" height="265" style="display: block; width: 265px; height: 265px;"></canvas>
							</div>
						</div>
					</div>
                    
                    
					@include('up_actions')

                    
                </div>
 
  
    
                
                <div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="card rounded-0 border-0 mb-3">
							<div class="card-header">
								<div class="row">
									<div class="col-6">
										<h5 class="card-title">Login</h5>
									</div>
									<div class="col text-right">
										<div class="dropdown">
											<button class="btn btn-link text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
												<i class="fa fa-ellipsis-v"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">

												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-cog text-secondary"></i> Settings</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-trash text-secondary"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body text-center pr-5 pl-5">
								<figure class="avatar120 rounded-circle mt-0">
									<img src="{{asset('imgs/user5.png')}}" alt="user image">
								</figure>
								<h5 class="my-4 f-light">Maxi Johnsons</h5>
								<div class="form-group text-left float-label">
									<input type="password" class="form-control">
									<label>Enter your password</label>
									<button class="overlay btn btn-link text-success">
										<i class="fa fa-eye"></i>
									</button>
								</div>
								<div class="text-center">
									<button class="btn btn-primary btn-block col">Login</button>
									<br>
									<a href="#/website/boothelp/html/boothelp/dashboard.html">Not you? Sign in as different user</a>
								</div>

							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="card rounded-0 border-0 mb-3">
							<div class="card-header">
								<div class="row">
									<div class="col-6">
										<h5 class="card-title">Login</h5>
									</div>
									<div class="col text-right">
										<div class="dropdown">
											<button class="btn btn-link text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
												<i class="fa fa-ellipsis-v"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">

												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-cog text-secondary"></i> Settings</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-trash text-secondary"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pr-5 pl-5">
								<a class=" text-center d-block" href="#/website/boothelp/html/boothelp/dashboard.html#">
									<img src="{{asset('imgs/logo_full.png')}}" alt="" class="mw-100">
								</a>
								<br>
								<div class="form-group text-left float-label">
									<input type="email" class="form-control">
									<label>Email address</label>
								</div>
								<div class="form-group text-left float-label">
									<input type="password" class="form-control">
									<label>Enter your password</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1"> Remember Me</label>
								</div>
								<br>
								<div>
									<button class="btn btn-primary btn-block col">Login</button>
									<br>
								</div>
								<div class="text-left">
									<a href="#/website/boothelp/html/boothelp/dashboard.html" class="">Forgot Password?</a>
									<a href="#/website/boothelp/html/boothelp/dashboard.html" class="float-right">Sign up Now!</a>
								</div>

							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">
						<div class="card rounded-0 border-0 mb-3">
							<div class="card-header">
								<div class="row">
									<div class="col-6">
										<h5 class="card-title">Signup</h5>
									</div>
									<div class="col text-right">
										<div class="dropdown">
											<button class="btn btn-link text-secondary rounded-0 dropdown-toggle float-right icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button">
												<i class="fa fa-ellipsis-v"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-exclamation-circle text-secondary"></i> Report</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-cog text-secondary"></i> Settings</a>
												<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">
													<i class="fa fa-trash text-secondary"></i> Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body pr-5 pl-5">
								<div class="form-group text-left float-label">
									<input type="text" class="form-control active" value="Admin Dashboard">
									<label>Your name</label>
								</div>
								<div class="form-group text-left float-label">
									<input type="email" class="form-control active" value="infoatmaxartkiller.in">
									<label>Email address</label>
								</div>
								<div class="form-group text-left float-label">
									<input type="password" class="form-control">
									<label>Enter your password</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck2">
									<label class="custom-control-label" for="customCheck2"> I agree with
										<a href="#/website/boothelp/html/boothelp/dashboard.html">Terms and Conditions</a>
									</label>
								</div>
								<br>
								<div class="text-center">
									<button class="btn btn-primary btn-block col">Sign up</button>
									<br>
									<a href="#/website/boothelp/html/boothelp/dashboard.html">Already have account? Sign in here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                
      
                
     
          
                
                <h5 class="sub-title">Top Employees <button class="btn btn-success float-right">View all</button></h5>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3  mb-3">
                        <div class="card rounded-0 border-0 h-100">
                            <div class="card-header">
                                 <h5 class="card-title">#1 Ticket Taker</h5>
                            </div>
                            <div class="card-body  userlist_large text-center">
                                <div class="media">
									<figure class="avatar150 rounded-circle mt-3 border">
										<img src="{{asset('imgs/user1.png')}}" alt="user image">
									</figure>
									<div class="media-body">
										<h4 class="mt-0">Maxi Johnsons<br><span class="rounded-3 mt-2 btn btn-danger btn-xs">Administrator</span></h4>
										<p class="mb-2">New Jersey, UK</p>									
									</div>
								</div>                              
                                <p class="text-primary mb-1">+91 000 000 0000</p>                                
                                <p class="text-primary mb-1">infoatmaxartkiller.in</p>                                
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">263564</h4>
                                                <a href="#/website/boothelp/html/boothelp/dashboard.html#" class="text-success">Completed</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">2635</h4>
                                                <a href="#/website/boothelp/html/boothelp/dashboard.html#" class="text-warning">In-Progress</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="media media-sm">
                                            <div class="media-body text-center">
                                                <h4 class="mb-0">254</h4>
                                                <a href="#/website/boothelp/html/boothelp/dashboard.html#" class="text-primary">Assinged</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="{{asset('imgs/user2.png')}}" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">John Smith <span class="rounded-3 ml-2 btn btn-danger btn-xs">Administrator</span></h5>
                                        New Jersey, UK
                                    </div>
                                    <button class="btn btn-primary mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">johnsmithtest@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div>                    
                        </div>
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="{{asset('imgs/user3.png')}}" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">Anjana Shth<span class="rounded-3 ml-2 btn btn-warning text-white btn-xs">Superviser</span></h5>
                                        New Jersey, UK
                                    </div>
                                    <button class="btn btn-primary mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>                    
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">anjanaseth@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div> 
                        </div>
                        <div class="card border-0 rounded-0 mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <figure class="avatar60 rounded-circle align-self-start">
                                        <img src="{{asset('imgs/user4.png')}}" alt="Generic placeholder image">
                                    </figure>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">Akash Vaidya <span class="rounded-3 ml-2 btn btn-primary btn-xs">Repsonder</span></h5>
                                        Delhi, IN
                                    </div>
                                    <button class="btn btn-primary mt-3 d-none d-sm-block"><i class="fa fa-comments"></i> Chat</button>
                                </div>
                            </div>
                            <div class="card-footer text-secondary border-top">
                                Email: <span class="text-primary">akashvaidya@demourl.test</span> <span class="text-muted">|</span> Phone: <span class="text-primary">+1 000 000 0000</span>
                            </div> 
                        </div>
                    
                    </div>
                </div>
               
			</div>
		<!-- main container ends -->



  
</div>

@include('upcoming.create')
@include('wallet.create')
@include('wallet.withdraw')
@endsection

@section('scripts')

<script>
	 $(".createUpcoming").on('submit',(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  e.preventDefault();
  form = $(this);
  $.ajax({
    url:"{{route('upcoming.save')}}",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   beforeSend : function()
   {
       //var load = '{{asset("imgs/load.gif")}}';
     //  form.find('#update_user').html('<span>Saving... </span> <img style=" width: 15px; transform: scale(1.5); " src="' + load + '">');
       form.find('#update_user').attr('disabled' , true);
   },
   success: function(data)
      {
        //console.log(form[0].sale_id.value);
      //  $('.includes'+ form[0].sale_id.value).text(form[0].included_id.options[form[0].included_id.selectedIndex].text);
        $('.modal').modal('hide');
        $('#up_data').append(data.data);
		//var upData``;
        console.log(data);
        form.find('#update_user').text('Save');
        form.find('#update_user').attr('disabled' , false);
      },
     error: function(e) 
      {
        $('#ErrliveToast').show();
      }          
    });
 }));
</script>


@endsection