<?php

require_once("Item.php");

final class Sobremesa extends Item implements IDados
{

    private bool $glutenFree;

    private bool $lactoseFree;

    public function __toString() {

        return "\nEssa sobremesa chamada " . $this->getNomeItem() . " de código " . $this->getCodItem().  ", possui glúten \n( 1 - PARA SIM     E      2 - PARA NÃO):" . $this->glutenFree . " \ne possui lactose em seus ingredientes? \n( 1 - PARA SIM     E      2 - PARA NÃO)\n" . $this->lactoseFree . " e tem valor unitário de " . $this->getValorItem().  "\n";

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

