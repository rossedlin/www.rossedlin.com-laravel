<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 01/10/2017
 * Time: 15:14
 *
 * @var Cryslo\Object\WordPress\Post $post
 */
?>
<!-- Sources & Tags -->
<div class="g-mb-30">

    <?php /*
    <h6 class="g-color-gray-dark-v1 g-mb-15">
        <strong class="g-mr-5">Source:</strong> <a
                class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">The Next
            Web (TNW)</a>
    </h6>
    */ ?>

    <h6 class="g-color-gray-dark-v1">
        <strong class="g-mr-5">Tags:</strong>

        <?php foreach ($post->getTags() as $tag)
        { ?>
        <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 rounded g-py-6 g-px-15 g-mr-5 <?= $tag->getCssClass() ?>"
           href="#"><?= $tag->getName() ?></a>
        <?php } ?>
    </h6>
</div>
<!-- End Sources & Tags -->