<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsValidTrait
{
    protected ?bool $isValid = null;

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
