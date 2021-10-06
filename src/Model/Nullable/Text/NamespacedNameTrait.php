<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait NamespacedNameTrait
{
    protected ?string $namespacedName;

    public function getNamespacedName(): ?string
    {
        return $this->namespacedName;
    }

    public function setNamespacedName(?string $namespacedName): self
    {
        $this->namespacedName = $namespacedName;

        return $this;
    }
}
