@extends('layouts.app')

@section('content') 	

	<div class="rh-xpad-A pt3 pb3 clearfix center" style="max-width: 1440px;background: #FBFAF9">
		<main class="rh-xpad-B pt3 pb3" style="background: white;">

			{{-- Back button component: --}}
			@php($myParentPage = get_region_halland_parent_page())
				<div class="pb3 rh-label-previous">
					<span class="rh-label-previous-icon"></span>
					<p class="rh-label-previous-title">
						@if($myParentPage['has_back'] == 1)
							<a href="{{$myParentPage['url']}}" style="color:black;">{{$myParentPage['post_title']}}</a>
						@else
							<a href="/" style="color:black;">Startsidan</a>
						@endif
					</p>
				</div>

			<div class="clearfix">
				<div class="col col-12 md-col-10">
					@while(have_posts()) @php(the_post())
					<h1>{{ $post->post_title }}</h1><br><br>
					@if(function_exists('get_region_halland_prepare_the_content'))
						@php(get_region_halland_prepare_the_content())
					@endif
					{{ the_content() }}
					@endwhile
				</div>
				<div class="col col-12 md-col-2">
					@include('partials.content-nav')
				</div>
			</div>

		</main>



	</div>

	{{--
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
									@include('partials.entry-meta')
								@endwhile
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>
	</div> --}}

@endsection
