<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait OrderingTrait
{
    protected ?int $ordering = null;

    public function getOrdering(): ?int
    {
        return $this->ordering;
    }

    public function setOrdering(?int $ordering): self
    {
        $this->ordering = $ordering;

        return $this;
    }
}
