<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsLocalTrait
{
    protected ?bool $isLocal = null;

    public function getIsLocal(): ?bool
    {
        return $this->isLocal;
    }

    public function setIsLocal(?bool $isLocal): self
    {
        $this->isLocal = $isLocal;

        return $this;
    }
}
