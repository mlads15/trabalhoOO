<?php

require_once("Item.php");

final class Bebida extends Item implements IDados {

    private bool $alcoolico;

    public function __toString() {
         
        return "\nEssa bebida chamada " . $this->getNomeItem() . " de código " . $this->getCodItem().  ", possui teor alcóolico \n( 1 - PARA SIM     E      2 - PARA NÃO): " . $this->alcoolico . " e tem valor unitário de " . $this->getValorItem().  "\n";

    }

    public function isAlcoolico(): bool {
        return $this->alcoolico;
    }

    public function setAlcoolico(bool $alcoolico): self {
        $this->alcoolico = $alcoolico;

        return $this;
    }
}


