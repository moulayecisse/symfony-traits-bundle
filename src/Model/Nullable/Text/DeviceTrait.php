<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait DeviceTrait
{
    protected ?string $device = null;

    public function getDevice(): ?string
    {
        return $this->device;
    }

    public function setDevice(?string $device): self
    {
        $this->device = $device;

        return $this;
    }
}
