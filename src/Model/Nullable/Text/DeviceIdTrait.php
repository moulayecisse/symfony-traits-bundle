<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait DeviceIdTrait
{
    protected ?string $deviceId;

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;

        return $this;
    }
}
