<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait TextTrait
{
    protected ?string $text;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
