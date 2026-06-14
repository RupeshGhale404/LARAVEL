@props(['data'])
				<!-- SERVICES-4
				============================================= -->
				<section id="services-4" class="wide-70 services-section division">
					<div class="container">
						<div class="row">
            @foreach($data as $item)
            <x-services.servicescard :data="$item"/>
			@endforeach

						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>    <!-- END SERVICES-4 -->