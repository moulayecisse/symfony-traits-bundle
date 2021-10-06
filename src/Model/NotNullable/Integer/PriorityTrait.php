<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait PriorityTrait
{
    protected int $priority;

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
