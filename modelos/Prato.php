<?php

require_once("Item.php");

final class Prato extends Item implements IDadoS {

    private int $calorias;

    public function __toString() {

        return "\nEsse prato chamado " . $this->getNomeItem() . " de código " . $this->getCodItem().  ", possui quantidade calórica de " . $this->getCalorias() . " e tem valor unitário de " . $this->getValorItem().  "\n";

    }

    public function getCalorias(): int {
        return $this->calorias;
    }

    public function setCalorias(int $calorias): self {
        $this->calorias = $calorias;

        return $this;
    }

}



