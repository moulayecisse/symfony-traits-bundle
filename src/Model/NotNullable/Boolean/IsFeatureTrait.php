<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean;

trait IsFeatureTrait
{
    protected bool $isFeature;

    public function getIsFeature(): bool
    {
        return $this->isFeature;
    }

    public function setIsFeature(bool $isFeature): self
    {
        $this->isFeature = $isFeature;

        return $this;
    }
}
