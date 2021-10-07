<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait BirthPlaceTrait
{
    protected ?string $birthPlace = null;

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }
}
