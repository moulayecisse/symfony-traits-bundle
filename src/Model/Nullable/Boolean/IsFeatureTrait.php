<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsFeatureTrait
{
    protected ?bool $isFeature;

    public function getIsFeature(): ?bool
    {
        return $this->isFeature;
    }

    public function setIsFeature(?bool $isFeature): self
    {
        $this->isFeature = $isFeature;

        return $this;
    }
}
