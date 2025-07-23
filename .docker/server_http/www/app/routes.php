<?php

return function(\FastRoute\RouteCollector $router) {
  
    // Page d'accueil
    $router->addRoute('GET', '/', 'App\Controller\HomeController::print');
    $router->addRoute('GET', '/index.php', 'App\Controller\HomeController::print');
 
    $router->addRoute('GET', '/api', 'App\Controller\ApiController::print');
    $router->addRoute('POST', '/api', 'App\Controller\ApiController::process');
    $router->addRoute('GET', '/api/', 'App\Controller\ApiController::print');
    $router->addRoute('POST', '/api/', 'App\Controller\ApiController::process');


    $router->addRoute('GET','/login.php', 'App\Controller\AuthController::auth');
    $router->addRoute('POST','/login.php', 'App\Controller\AuthController::authProcess');
 
    $router->addRoute('GET', '/profile.php', 'App\Controller\ProfilController::profil1');
    $router->addRoute('GET', '/profile2.php', 'App\Controller\ProfilController::profil2');

    $router->addRoute('GET', '/logout.php', 'App\Controller\AuthController::deconnect');


};
