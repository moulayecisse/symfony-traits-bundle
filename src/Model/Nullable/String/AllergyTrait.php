<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait AllergyTrait
{
    protected ?string $allergy = null;

    public function getAllergy(): string
    {
        return $this->allergy;
    }

    public function setAllergy(string $allergy): self
    {
        $this->allergy = $allergy;

        return $this;
    }
}
