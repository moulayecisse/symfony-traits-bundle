<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait BriefTrait
{
    protected ?string $brief = null;

    public function getBrief(): ?string
    {
        return $this->brief;
    }

    public function setBrief(?string $brief): self
    {
        $this->brief = $brief;

        return $this;
    }
}
