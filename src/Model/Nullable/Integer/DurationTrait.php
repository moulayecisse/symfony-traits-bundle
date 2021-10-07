<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait DurationTrait
{
    protected ?int $duration = null;

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }
}
