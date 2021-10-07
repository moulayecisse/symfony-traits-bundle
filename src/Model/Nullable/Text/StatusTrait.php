<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait StatusTrait
{
    protected ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
