<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ColorTrait
{
    protected ?string $color = null;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
