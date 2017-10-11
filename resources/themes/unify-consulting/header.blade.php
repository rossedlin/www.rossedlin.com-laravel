<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:59
 */
?>
<style>
	.fullscreenbanner
	{
		text-shadow:               0px 2px 2px rgba(0, 0, 0, 0.5);
	}
</style>

<!-- Revolution Slider -->
<div class="g-overflow-hidden">
	<div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container"
		 data-alias="typewriter-effect" data-source="gallery" style="background-color:transparent;padding:0px;">
		<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
		<div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
			<ul>

				{{--@include('index.slides.one')--}}
				@include('index.slides.two')

			</ul>
			<div class="tp-bannertimer" style="height: 2px; background-color: rgba(255, 255, 255, .5);"></div>
		</div>
	</div>
</div>
<!-- End Revolution Slider -->