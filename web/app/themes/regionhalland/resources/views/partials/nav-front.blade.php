@if(function_exists('get_region_halland_get_single_page'))
    @php($myPage = get_region_halland_get_single_page(30)) 
	<nav aria-label="Huvudnavigation" class="container background-dark-blue-frida mx-auto mobile-friendly-padding" style="background-image: url({{ $myPage->image_url }}); background-size: cover;">
		<div class="pt6">&nbsp;</div>
		<div class="pr6">
		<div class="pr6">
		<div class="pr6">
		<div class="pr6">
		<div class="pr6">
	    		<div class="p1 h3 background-black">
	      			<div class="p3 text-white">
	        			{{ $myPage->post_content }}
	    			</div>          
	            </div>	
		</div>
		</div>
		</div>
		</div>
		</div>
	</nav>
@endif