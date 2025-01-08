<?php

namespace Controllers;

use DAO\MenuItemDAO;

class MenuItemController
{
    private MenuItemDAO $menuItemDAO;

    public function __construct(MenuItemDAO $menuItemDAO)
    {
        $this->menuItemDAO = $menuItemDAO;
    }

    public function listMenuItems(): ?string
    {
        $menuItems = $this->menuItemDAO->getAllMenuItems();

        return json_encode($menuItems);
    }
}
