<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait ResumeTrait
{
    protected string $resume;

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
