<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait PhoneTrait
{
    protected ?string $phone = null;

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
