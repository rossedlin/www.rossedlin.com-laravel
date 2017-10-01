<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 17/09/2017
 * Time: 17:46
 *
 * @var Cryslo\Object\WordPress\Post $post
 */
?>

<!-- Articles Content -->
<div class="col-lg-9 g-mb-50 g-mb-0--lg">
    <article class="g-mb-60">
        @include('sections.blog.post.article.header')

        <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
            <figure class="u-shadow-v25 g-mb-30">
                <img class="img-fluid w-100" src="<?= $post->getFeaturedMedia() ?>" alt="Image Description">
            </figure>

            <?= $post->getContent() ?>
        </div>

        @include('sections.blog.post.article.sources-tags')

        <hr class="g-brd-gray-light-v4">

        {{--@include('sections.blog.post.article.social-shares')--}}

        <hr class="g-brd-gray-light-v4 g-mb-40">

        {{--@include('sections.blog.post.article.related')--}}
        @include('sections.blog.post.article.author')
        {{--@include('sections.blog.post.article.comments')--}}


    </article>

    <div id="stickyblock-end"></div>
</div>
<!-- End Articles Content -->