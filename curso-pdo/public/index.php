<?php

require "../bootrap.php";

use app\classes\Routes;
use app\classes\Uri;
use app\classes\Layout;





$routes = [
    // '/' significa que o usuario esta na página inicial    
    '/' => 'controllers/index',
    '/user_create' => 'controllers/user_create',
    '/user_edit'   => 'controllers/user_edit',
    '/user_update'   => 'controllers/user_update',     
    '/user_store'  => 'controllers/user_store',
        
];

$uri = Uri::load();

$layout = new Layout();

require Routes::load($routes, $uri);

require $layout->master('layout');



