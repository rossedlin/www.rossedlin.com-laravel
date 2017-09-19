<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 22:34
 *
 * @var Cryslo\Object\WordPress\Post[] $latest_posts
 * @var int                            $count
 * @var int                            $key
 * @var Cryslo\Object\WordPress\Post   $latest_post
 */
?>
<article>
    <h3 class="h6 g-mb-2">
        <a class="g-color-white--hover" href="/blog/<?= $latest_post->getYear() . '/' . $latest_post->getSlug() ?>">
            <?= $latest_post->getTitle() ?>
        </a>
    </h3>
    <div class="small g-color-white-opacity-0_6">May 8, 2017</div>
</article>

<?= ($key < $count - 1 ? '<hr class="g-brd-white-opacity-0_1 g-my-10">' : '') ?>