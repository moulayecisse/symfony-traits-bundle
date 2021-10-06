<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait NameTrait
{
    protected ?string $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
