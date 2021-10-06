<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait TokenTrait
{
    protected ?string $token;

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
