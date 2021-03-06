<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean;

trait IsValidTrait
{
    protected bool $isValid;

    public function getIsValid(): bool
    {
        return $this->isValid;
    }

    public function setIsValid(bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
