<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsReadTrait
{
    protected ?bool $isRead;

    public function getIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(?bool $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }
}
