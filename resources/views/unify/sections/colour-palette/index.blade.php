<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 01/09/2017
 * Time: 16:28
 *
 * @var App\Objects\ColorPalette\Item[] $colorPalette
 */
?>
<!-- Blog Grid Blocks -->
<div class="g-bg-gray-light-v5">
    <div class="container g-py-100">
        <div class="masonry-grid row g-mb-70">

            <?php foreach ($colorPalette as $colorPaletteItem)
            {
            ?>
                @include('unify.snippets.colour-palette.element')
            <?php } ?>


        </div>

    @include('unify.snippets.portfolio.pagination')
    </div>
</div>
<!-- End Blog Grid Blocks -->