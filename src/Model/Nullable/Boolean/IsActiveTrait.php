<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsActiveTrait
{
    protected ?bool $isActive = null;

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }
}
