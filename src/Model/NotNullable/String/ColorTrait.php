<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ColorTrait
{
    protected string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
