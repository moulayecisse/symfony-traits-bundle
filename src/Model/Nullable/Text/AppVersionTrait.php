<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait AppVersionTrait
{
    protected ?string $appVersion = null;

    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }

    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;

        return $this;
    }
}
