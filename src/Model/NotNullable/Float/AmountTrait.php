<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait AmountTrait
{
    protected float $amount;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }
}
