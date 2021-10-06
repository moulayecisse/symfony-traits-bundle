<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ColorTrait
{
    protected ?string $color;

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
