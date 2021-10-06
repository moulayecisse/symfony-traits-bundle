<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait ImageTrait
{
    protected ?string $image;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
