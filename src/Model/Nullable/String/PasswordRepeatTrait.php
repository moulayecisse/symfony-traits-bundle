<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait PasswordRepeatTrait
{
    protected ?string $passwordRepeat = null;

    public function getPasswordRepeat(): string
    {
        return $this->passwordRepeat;
    }

    public function setPasswordRepeat(string $passwordRepeat): self
    {
        $this->passwordRepeat = $passwordRepeat;

        return $this;
    }
}
