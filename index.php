<?php

require_once 'vendor/autoload.php';

use Config\Database;
use DAO\MenuItemDAO;
use Controllers\MenuItemController;

// Configurar dependências
$pdo = Database::getConnection();
$menuItemDAO = new MenuItemDAO($pdo);
$menuItemController = new MenuItemController($menuItemDAO);

echo $menuItemController->listMenuItems();