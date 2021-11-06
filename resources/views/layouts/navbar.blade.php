		<!-- header starts -->
		<header class="border-bottom">
			<!-- Fixed navbar -->
			<nav class="navbar navbar-expand-sm ">
				<a class="navbar-brand" href="#/website/boothelp/html/boothelp/dashboard.html#">
					<img src="{{asset('imgs/logo.png')}}" alt="">
					<h5 class="text-uppercase visible-md">
						<span>Bootstrap</span>
						<small>BootHelp <i class="fa fa-circle text-danger"></i> Design</small>
					</h5>
				</a>
				<button class="btn btn-link menu-btn sq-btn rounded-0 border-right" type="button" id="sidebar-left">
					<span class="fa fa-bars"></span>
				</button>

				<div class="d-flex col p-0" id="navbarCollapse">

					<form class="form-inline search-form mr-auto">
                       <input class="form-control bg-none" type="text" placeholder="Search..." aria-label="Search">
						<button class="btn btn-link text-secondary search-btn" type="button">
							<i class="fa fa-search"></i>
						</button>
						<button class="btn btn-link text-secondary search-close-btn" type="button">
							<i class="fa fa-close"></i>
						</button>
					</form>
					<div class="d-block ">
						
						<div class="dropdown float-left">
							<button class="btn btn-link sq-btn menu-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">
								<span class="fa fa-bell-o"></span>
							</button>
							<div class="dropdown-menu dropdown-menu-center mega rounded-0 arrow-success">
								<div class="title bg-success text-white rounded-0">
									<i class="fa fa-bell-o "></i> Notifications</div>
								
									<div class="tab-pane fade show active" id="tab13" role="tabpanel">
										<div class="list-unstyled userlist">
											<a class="item" href="#/website/boothelp/html/boothelp/dashboard.html#">
												<div class="media">
													<figure class="avatar36 rounded-circle z2 align-self-start mr-3">
														<img src="./BootHelp _ Bootstrap template design _ html responsive admin dashboard template by maxartkiller_files/user2.png" alt="Generic placeholder image">
													</figure>
													<div class="media-body">
														<h5 class="time-title">John Smith
															<small class="float-right">1 min ago</small>
														</h5>
														Updated status
													</div>
												</div>
											</a>
											<a class="item" href="#/website/boothelp/html/boothelp/dashboard.html#">
												<div class="media">
													<figure class="avatar36 rounded-circle z2 align-self-start mr-3">
														<img src="./BootHelp _ Bootstrap template design _ html responsive admin dashboard template by maxartkiller_files/user4.png" alt="Generic placeholder image">
													</figure>
													<div class="media-body">
														<h5 class="time-title">
															<span class="circle-dot bg-success"></span>Tommy Bayoth
															<small class="float-right">1 hour ago</small>
														</h5>
														Shared
														<b class="text-primary">John Smith</b>’s status
														<b class="text-primary">post</b>
													</div>
												</div>
											</a>
											<a class="item" href="#/website/boothelp/html/boothelp/dashboard.html#">
												<div class="media">
													<div class="media-body">
														<h5 class="time-title">List-based media object</h5>
														Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
													</div>
												</div>
											</a>
										</div>
									</div>

							</div>
						</div>
					
						<div class="dropdown float-left">
							<button class="btn btn-link sq-btn menu-btn dropdown-toggle invisible-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">
								<span class="fa fa-th"></span>
							</button>
							<div class="dropdown-menu dropdown-menu-center mega arrow-warning gradient-warning rounded-0 border-0">
								<div class="title text-center text-white  ">
									<i class="fa fa-globe "></i> Quick Links</div>

								<ul class="list-unstyled quicklinks">
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-rocket"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-users"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-bullhorn"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-gift"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-plane"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<i class="icon fa fa-truck"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<span>Emails</span>
											<i class="icon fa fa-envelope"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<span>LifeCover</span>
											<i class="icon fa fa-umbrella"></i>
										</a>
									</li>
									<li class="item">
										<a href="#/website/boothelp/html/boothelp/dashboard.html#">
											<span>Ideas</span>
											<i class="icon fa fa-lightbulb-o"></i>
										</a>
									</li>
								</ul>

							</div>
						</div>
					</div>
					<div class="d-block">

						<div class="dropdown float-left">
							<a href="#/website/boothelp/html/boothelp/dashboard.html#" class="btn btn-link text-dark user-profile invisible-sm">
								<figure class="avatar30 rounded-circle m-0">
									<img src="{{asset('imgs/user1.png')}}" alt="">
								</figure>								
							</a>
							<button class="btn btn-secondary sq-btn rounded-0 dropdown-toggle float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" type="button">
								<span class="fa fa-angle-down"></span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">Profile</a>
								<a class="dropdown-item" href="#/website/boothelp/html/boothelp/dashboard.html#">Settings</a>
								<a class="dropdown-item" href="#"  onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">Logout</a>
								          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										  </form>    
							</div>
						</div>

						<button class="btn btn-success sq-btn border-0 rounded-0 text-white" type="button" id="sidebar-right">
							<span class="icon fa fa-angle-double-left"></span>
						</button>
					</div>
				</div>
			</nav>
		</header>
		<!-- header ends -->