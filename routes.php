<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about');
$router->get('contact','controllers/contact.php');
$router->post('names', 'controllers/add-name.php');