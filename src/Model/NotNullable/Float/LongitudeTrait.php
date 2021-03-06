<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait LongitudeTrait
{
    protected float $longitude;

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
