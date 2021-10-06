<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait StockTrait
{
    protected ?int $stock;

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}
