<?php

// define routes

$routes = array(
    array(
        "pattern" => "contact",
        "controller" => "home",
        "action" => "contact"
    ),
    array(
        "pattern" => "about",
        "controller" => "home",
        "action" => "about"
    ),
    array(
        "pattern" => "login",
        "controller" => "auth",
        "action" => "login"
    ),
    array(
        "pattern" => "login",
        "controller" => "home",
        "action" => "login"
    ),
    array(
        "pattern" => "support",
        "controller" => "home",
        "action" => "support"
    )
);

// add defined routes
foreach ($routes as $route) {
    $router->addRoute(new Framework\Router\Route\Simple($route));
}

// unset globals
unset($routes);
