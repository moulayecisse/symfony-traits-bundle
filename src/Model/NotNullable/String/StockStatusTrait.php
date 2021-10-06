<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait StockStatusTrait
{
    protected string $stockStatus;

    public function getStockStatus(): string
    {
        return $this->stockStatus;
    }

    public function setStockStatus(string $stockStatus): self
    {
        $this->stockStatus = $stockStatus;

        return $this;
    }
}
