<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait StatusTrait
{
    protected string $status;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
