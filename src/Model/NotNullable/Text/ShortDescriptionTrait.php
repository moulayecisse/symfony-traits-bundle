<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait ShortDescriptionTrait
{
    protected string $shortDescription;

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
