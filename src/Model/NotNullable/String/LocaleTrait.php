<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\String;

trait LocaleTrait
{
    protected string $locale;

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }
}
