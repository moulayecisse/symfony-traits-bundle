<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait LabelTrait
{
    protected ?string $label;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
