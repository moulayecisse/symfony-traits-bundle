<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsAvailableTrait
{
    protected ?bool $isAvailable;

    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(?bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }
}
