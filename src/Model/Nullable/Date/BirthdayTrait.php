<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Date;

use DateTime;

trait BirthdayTrait
{
    protected ?DateTime $birthday = null;

    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(?DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
}
