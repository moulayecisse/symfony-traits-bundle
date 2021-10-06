<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime;

use DateTime;

trait DateTrait
{
    protected DateTime $date;

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}
