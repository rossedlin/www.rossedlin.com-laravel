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

    <h4 class="alert-heading"><span><?= $title ?></span></h4>
    <p><span><?= $message ?></span></p>

    <p>
        <span>You can see the payment here: <a href="https://dashboard.stripe.com/login" target="_blank">stripe.com/login</a></span><br/>
        <span>Username: demo@rossedlin.com</span><br/>
        <span>Password: Password1234!!!</span><br/>
    </p>
</div>