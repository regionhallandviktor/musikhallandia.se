@extends('layouts.app')

@section('content') 	
  	
  	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		
		<nav aria-label="Huvudnavigation" class="breadcrumbs container background-dark-blue relative mx-auto pl5 pr5 pt1 pb2 z1">

			@include('partials.breadcrumb')
			
		</nav>
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					
					<div class="col-12 lg-col-3">
					
						@include('partials.nav-sidebars')
						
						<div class="pt2">&nbsp;</div>

						@include('partials.content-nav')
					
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">
							
							<div>
								<h1>{{ the_title() }}</h1>
							</div>
							
							<div id="main">
								@while(have_posts()) @php(the_post())
									@include('partials.article')
										
										{{ get_region_halland_acf_page_education_A_short_description() }}<br>
										{{ get_region_halland_acf_page_education_A_kommun_name() }}<br>
										{{ get_region_halland_acf_page_education_A_link_title() }}<br>
										{{ get_region_halland_acf_page_education_A_link_url() }}<br>
										{{ get_region_halland_acf_page_education_A_link_target() }}<br>
										{{ get_region_halland_acf_page_education_A_start_time() }}<br>
										{{ get_region_halland_acf_page_education_A_end_time() }}<br>
										{{ get_region_halland_acf_page_education_A_last_time() }}<br>
									
									@include('partials.entry-meta')
								@endwhile
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>	
	</div>

@endsection
