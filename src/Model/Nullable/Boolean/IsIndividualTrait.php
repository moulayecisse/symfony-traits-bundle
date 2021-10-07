<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsIndividualTrait
{
    protected ?bool $isIndividual = null;

    public function getIsIndividual(): ?bool
    {
        return $this->isIndividual;
    }

    public function setIsIndividual(?bool $isIndividual): self
    {
        $this->isIndividual = $isIndividual;

        return $this;
    }
}
