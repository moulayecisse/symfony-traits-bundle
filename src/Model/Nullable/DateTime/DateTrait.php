<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime;

use DateTime;

trait DateTrait
{
    protected ?DateTime $date = null;

    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
