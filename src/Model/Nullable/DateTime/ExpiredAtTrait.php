<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait ExpiredAtTrait
{
    protected ?DateTime $expiredAt;

    public function getExpiredAt(): ?DateTime
    {
        return $this->expiredAt;
    }

    public function setExpiredAt(DateTime $expiredAt): self
    {
        $this->expiredAt = $expiredAt;

        return $this;
    }
}
