<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait AccountTrait
{
    protected ?string $account = null;

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;

        return $this;
    }
}
