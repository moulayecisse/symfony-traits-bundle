<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait RegistrationTokenTrait
{
    protected ?string $registrationToken = null;

    public function getRegistrationToken(): string
    {
        return $this->registrationToken;
    }

    public function setRegistrationToken(string $registrationToken): self
    {
        $this->registrationToken = $registrationToken;

        return $this;
    }
}
