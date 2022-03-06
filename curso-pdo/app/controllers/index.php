<?php

use app\models\user;

$user = new User;
$users = $user->all();

$layout->add('home');

