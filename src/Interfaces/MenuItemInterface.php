<?php

namespace Interfaces;

use Models\MenuItem;

interface MenuItemInterface
{
    public function addMenuItem(MenuItem $item): bool;
    public function getAllMenuItems(): ?object;
    public function findMenuItemByName(string $name): ?MenuItem;
}
