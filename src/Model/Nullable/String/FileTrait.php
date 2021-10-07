<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait FileTrait
{
    protected ?string $file = null;

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }
}
