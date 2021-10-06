<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait FullContentTrait
{
    protected ?string $fullContent;

    public function getFullContent(): string
    {
        return $this->fullContent;
    }

    public function setFullContent(string $fullContent): self
    {
        $this->fullContent = $fullContent;

        return $this;
    }
}
