<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean;

trait ExcludeSaleItemsTrait
{
    protected bool $excludeSaleItems;

    public function getExcludeSaleItems(): bool
    {
        return $this->excludeSaleItems;
    }

    public function setExcludeSaleItems(bool $excludeSaleItems): self
    {
        $this->excludeSaleItems = $excludeSaleItems;

        return $this;
    }
}
