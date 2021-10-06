<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait NationalityTrait
{
    protected ?string $nationality;

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }
}
