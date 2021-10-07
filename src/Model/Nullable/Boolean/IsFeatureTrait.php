<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean;

trait IsFeatureTrait
{
    protected ?bool $isFeature = null;

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
