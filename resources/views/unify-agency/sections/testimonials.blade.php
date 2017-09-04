<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 11:30
 */
?>
<!-- Section Content -->
<section id="testimonials" class="g-theme-bg-gray-light-v4">
    <div class="container text-center g-max-width-770 g-py-30 g-py-70--md">
        <div class="u-heading-v8-2 g-mb-40">
            <h2 class="text-uppercase u-heading-v8__title g-font-weight-700 g-font-secondary g-font-size-26 g-color-gray-dark-v2 g-mb-25">
                Want to join our team?</h2>
            <p class="mb-0">Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum. Donec molestie, lorem
                nec sollicitudin elementum, mi justo posuere lectus, vitae ullamcorper orci mi vel massa.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>

        <a class="btn u-btn-primary btn-md text-uppercase g-font-weight-700 g-font-size-12 rounded-0 g-px-25 g-py-10 mb-0"
           href="#">Send your resume</a>
    </div>

    <div class="">
        <div class="row no-gutters">

            <?php foreach (\Illuminate\Support\Facades\Lang::get('testimonials') as $key => $testimonial)
            { ?>
            @include('unify-agency.snippets.testimonials.testimonial')
            <?php } ?>

        </div>
    </div>
</section>
<!-- End Section Content -->