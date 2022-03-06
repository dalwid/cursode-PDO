<?php

use app\models\User;
use app\models\Post;

$nome  = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$post = new Post();
//$post->insert();

$user = new user();
$cadastrado = $user->insert([
    'nome' => $nome, 
    'email' => $email,
    'senha' => $senha
]);

if($cadastrado){
    header('location:/');
}