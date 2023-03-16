<?php
// index.php

// Load the Autoloader
require_once __DIR__ . '/app/core/Autoloader.php';

// Register the Autoloader
app\core\Autoloader::register();

// Load the Config
require_once __DIR__ . '/app/core/Config.php';

// Initialize the Router
$router = new app\core\Router();

// Register routes
$router->addRoute('/', 'app\controllers\FrontendController', 'index');
$router->addRoute('/about', 'app\controllers\FrontendController', 'about');
$router->addRoute('/admin', 'app\controllers\AdminController', 'dashboard');
$router->addRoute('/admin/login', 'app\controllers\AdminController', 'login');
$router->addRoute('/bellkuhlo_Admin/cms/index.php', 'app\controllers\FrontendController', 'index');

// Execute the Router
$router->execute();

