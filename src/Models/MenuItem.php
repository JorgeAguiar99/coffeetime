<?php

namespace Models;

class MenuItem implements \JsonSerializable
{
    private string $name;
    private string $description;
    private float $price;
    private string $category;

    public function __construct(string $name, string $description, float $price, string $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getCategory(): string
    {
        return $this->category;
    }
    public function jsonSerialize(): ?array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
        ];
    }
}
