<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Integer;

trait UsageLimitTrait
{
    protected ?int $usageLimit;

    public function getUsageLimit(): ?int
    {
        return $this->usageLimit;
    }

    public function setUsageLimit(int $usageLimit): self
    {
        $this->usageLimit = $usageLimit;

        return $this;
    }
}
