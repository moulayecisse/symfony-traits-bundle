<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ShortDescriptionTrait
{
    protected ?string $shortDescription = null;

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }
}
