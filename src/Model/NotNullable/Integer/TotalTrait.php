<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer;

trait TotalTrait
{
    protected int $total;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
}
