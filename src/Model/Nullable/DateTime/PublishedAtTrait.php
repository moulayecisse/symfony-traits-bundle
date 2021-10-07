<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait PublishedAtTrait
{
    protected ?DateTime $publishedAt = null;

    public function getPublishedAt(): ?DateTime
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(DateTime $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }
}
