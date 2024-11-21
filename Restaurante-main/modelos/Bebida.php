<?php

require_once("Item.php");

final class Bebida extends Item implements IDados {

    private bool $alcoolico;

    public function __toString()
    {
        return $this->alcoolico . "\n";
    }

    public function isAlcoolico(): bool {
        return $this->alcoolico;
    }

    public function setAlcoolico(bool $alcoolico): self {
        $this->alcoolico = $alcoolico;

        return $this;
    }
}


