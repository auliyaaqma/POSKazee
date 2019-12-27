				<div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                		<div class="dropdown dropdown-lang">
	                			<div class="m-t-5">Admin</div>
	                		</div>
	                    <div class="dropdown user-menu">

	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <!-- <img src="{{asset('img/avatar-2-64.png')}}" alt=""> -->
	                            <img src="{{asset('img/Kazee_Logo.png')}}" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                        	<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
{{-- 	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a> --}}
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                       	<a class="btn btn-nav btn-inline btn-primary-outline" href="{{url('/home')}}"><i class="fa fa-home"></i>
	                            Home
	                        </a>
									
	                    </div><!--.site-header-collapsed-in-->
	                </div>
	                <!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->