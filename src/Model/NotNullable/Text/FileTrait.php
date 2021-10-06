<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait FileTrait
{
    protected string $file;

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }
}
