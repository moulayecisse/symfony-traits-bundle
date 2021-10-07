<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Float;

trait LatitudeTrait
{
    protected ?float $latitude = null;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }
}
