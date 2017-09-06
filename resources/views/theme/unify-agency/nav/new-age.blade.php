<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 12:24
 *
 * @var \App\Objects\Navigation\Element[] $navigation
 */
?>
<!-- Navigation -->
<nav class="navbar navbar-toggleable-sm navbar-light bg-faded fixed-top">


    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        Menu <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">Ross Edlin</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <?php foreach ($navigation as $element)
            {
            ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= $element->getSubUrl() ?>"><?= $element->getName() ?></a>
            </li>
            <?php } ?>

        </ul>
    </div>

</nav>
