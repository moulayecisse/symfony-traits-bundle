<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Decimal;

trait PriceTrait
{
    protected ?int $price = null;

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }
}
