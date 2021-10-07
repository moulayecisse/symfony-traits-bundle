<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait FullDescriptionTrait
{
    protected ?string $fullDescription = null;

    public function getFullDescription(): string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(string $fullDescription): self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }
}
