<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait PasswordRepeatTrait
{
    protected ?string $passwordRepeat;

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
