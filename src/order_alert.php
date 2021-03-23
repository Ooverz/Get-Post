<?php

require 'functions.php';
require_once 'validate.php';

if($invalid_email || $invalid_street || $invalid_streetnumber || $invalid_city || $invalid_zip !== "") : ?>

<div class="alert alert-danger" role="alert"> 
    <ul>
        <?= printError($invalid_email) ?>
        <?= printError($invalid_street) ?>
        <?= printError($invalid_streetnumber) ?>
        <?= printError($invalid_city) ?>
        <?= printError($invalid_zip) ?>
    </ul>
</div>

<?php endif ?>