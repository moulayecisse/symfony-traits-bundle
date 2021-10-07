<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait GenderTrait
{
    protected ?string $gender = null;

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
