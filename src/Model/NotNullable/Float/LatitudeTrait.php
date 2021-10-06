<?php
namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Float;

trait LatitudeTrait
{
    protected float $latitude;

    public function setLatitude(float $latitude) : self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLatitude() : float
    {
        return $this->latitude;
    }
}
