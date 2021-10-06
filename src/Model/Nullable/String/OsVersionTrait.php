<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait OsVersionTrait
{
    protected ?string $osVersion;

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;

        return $this;
    }
}
