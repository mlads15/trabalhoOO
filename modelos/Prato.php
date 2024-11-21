<?php

require_once("Item.php");

final class Prato extends Item implements IDadoS {

    private int $calorias;

    public function __toString()
    {
        return $this->calorias . "\n";
    }

    public function getCalorias(): int {
        return $this->calorias;
    }

    public function setCalorias(int $calorias): self {
        $this->calorias = $calorias;

        return $this;
    }

}



