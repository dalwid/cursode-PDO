<?php

use app\models\user;

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

$user = new user;
$userEncontrado = $user->find('id', $id);

$layout->add('user_edit');



