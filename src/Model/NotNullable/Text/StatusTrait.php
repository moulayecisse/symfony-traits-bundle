<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

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
