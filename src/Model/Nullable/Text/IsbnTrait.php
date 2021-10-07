<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait IsbnTrait
{
    protected ?string $isbn = null;

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }
}
