<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait ResumeTrait
{
    protected ?string $resume = null;

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }
}
