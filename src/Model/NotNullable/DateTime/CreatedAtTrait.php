<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait CreatedAtTrait
{
    protected DateTime $createdAt;

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
