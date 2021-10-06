<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait DescriptionTrait
{
    protected ?string $description;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
