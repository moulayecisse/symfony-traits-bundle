<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean;

trait IsDraftTrait
{
    protected bool $isDraft;

    public function getIsDraft(): bool
    {
        return $this->isDraft;
    }

    public function setIsDraft(bool $isDraft): self
    {
        $this->isDraft = $isDraft;

        return $this;
    }
}
