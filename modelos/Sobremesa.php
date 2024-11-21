<?php

require_once("Item.php");

final class Sobremesa extends Item implements IDados
{

    private bool $glutenFree;

    private bool $lactoseFree;

    public function __toString()
    {
        return $this->glutenFree . $this->lactoseFree . "\n";
    }

    public function isGlutenFree(): bool {
        return $this->glutenFree;
    }

    public function setGlutenFree(bool $glutenFree): self {
        $this->glutenFree = $glutenFree;

        return $this;
    }

    public function isLactoseFree(): bool {
        return $this->lactoseFree;
    }

    public function setLactoseFree(bool $lactoseFree): self {
        $this->lactoseFree = $lactoseFree;

        return $this;
    }
}

