<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait SwiftTrait
{
    protected ?string $swift = null;

    public function getSwift(): ?string
    {
        return $this->swift;
    }

    public function setSwift(?string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }
}
