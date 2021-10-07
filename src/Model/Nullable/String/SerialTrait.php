<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait SerialTrait
{
    protected ?string $serial = null;

    public function getSerial(): string
    {
        return $this->serial;
    }

    public function setSerial(string $serial): self
    {
        $this->serial = $serial;

        return $this;
    }
}
