<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait CountryTrait
{
    protected string $country;

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
