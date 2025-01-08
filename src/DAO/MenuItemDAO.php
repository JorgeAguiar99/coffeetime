<?php

namespace DAO;

use Interfaces\MenuItemInterface;
use Models\MenuItem;
use PDO;

class MenuItemDAO implements MenuItemInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addMenuItem(MenuItem $item): bool
    {
        return false;
    }

    public function getAllMenuItems(): ?object
    {
        $stmt = $this->pdo->query("SELECT * FROM menu");
        $results = $stmt->fetchObject();

        $menuItems = new MenuItem($results->name, $results->description, $results->price, $results->category);

        return $menuItems;
    }

    public function findMenuItemByName(string $name): ?MenuItem
    {
        return null;
    }
}
