<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait TypeTrait
{
    protected string $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
