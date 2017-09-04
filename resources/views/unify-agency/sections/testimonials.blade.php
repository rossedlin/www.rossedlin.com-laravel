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
    <div class="text-center g-py-30 g-py-80--md">
        <div class="container">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
                <h4 class="g-line-height-1 g-font-weight-600 g-font-size-12 g-color-primary g-mb-20">
                    Testimonials
                </h4>
                <h2 class="u-heading-v2__title g-font-weight-600 g-font-size-30 g-font-size-40--md g-theme-color-gray-dark-v1">
                    What people say about me</h2>
            </div>
        </div>
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