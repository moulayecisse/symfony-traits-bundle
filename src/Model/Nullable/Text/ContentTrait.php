<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ContentTrait
{
    protected ?string $content;

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
