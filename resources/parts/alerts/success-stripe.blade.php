<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 18/09/2017
 * Time: 17:56
 *
 * @var string $title
 * @var string $message
 */
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    <h4 class="alert-heading"><?= $title ?></h4>
    <p><?= $message ?></p>
</div>