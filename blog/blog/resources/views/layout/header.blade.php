			<!-- HEADER
			============================================= -->
			<header id="header-2" class="header white-menu">
				<div class="header-wrapper">

					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				    	<span class="smllogo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo-black.png') }}" width="200" height="50" alt="mobile-logo"/></a></span>
				    	<a href="tel:+6123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
				  	</div>

				  	<!-- HEADER STRIP -->
				  	<div class="headtoppart bg-white clearfix">
				     	<div class="headerwp clearfix">

				     		<!-- Information -->
				      		<div class="headertopleft">
					        	<div class="header-info clearfix">
					        	<span class="txt-400"><i class="fas fa-map-marker-alt"></i>121 King St, Melbourne, Victoria 3000</span>
					            </div>
				      		</div>

				      		<!-- Contacts -->
					    <div class="headertopright header-contacts">
					    	<a href="tel:+6123456789" class="callusbtn txt-400"><i class="fas fa-phone"></i>+61-2 3456 7890</a>
					    	<a href="mailto:hello@domain.com" class="txt-400"><i class="far fa-envelope-open"></i>hello@domain.com</a>
					      	</div>

				    	</div>
				  	</div> 	<!-- END HEADER STRIP -->

				  	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
					<div class="wsmainwp clearfix">

						<!-- LOGO IMAGE -->
						<div class="desktoplogo"><a href="{{ route('home') }}" class="logo-black"><img src="{{ asset('images/logo-black.png') }}" width="180" height="45" alt="header-logo"></a></div>
						<div class="desktoplogo"><a href="{{ route('home') }}" class="logo-white"><img src="{{ asset('images/logo-white.png') }}" width="180" height="45" alt="header-logo"></a></div>

						<!-- MAIN MENU -->
				      	<nav class="wsmenu clearfix blue-header">
	        			<ul class="wsmenu-list">
	        				<li aria-haspopup="true"><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
	        				<li aria-haspopup="true"><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
	        				<li aria-haspopup="true"><a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a></li>
	        				<li aria-haspopup="true"><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
		    	    		<li class="nl-simple" aria-haspopup="true"><a href="{{ route('contact') }}" class="header-btn btn-primary tra-black-hover last-link">Get Started</a></li>
	        			</ul>
				    	</nav> 	<!-- END MAIN MENU -->

				</div>
			</div> 	<!-- END NAVIGATION MENU -->

			</div>     <!-- End header-wrapper -->
		</header> 	<!-- END HEADER -->