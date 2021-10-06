<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ExtensionTrait
{
    protected ?string $extension;

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }
}
