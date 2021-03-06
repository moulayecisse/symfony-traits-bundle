<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait RateTrait
{
    protected float $rate;

    public function getRate(): float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
