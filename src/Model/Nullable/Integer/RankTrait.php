<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait RankTrait
{
    protected ?int $rank = null;

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }
}
