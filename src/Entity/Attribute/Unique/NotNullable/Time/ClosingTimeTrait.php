<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ClosingTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Time\ClosingTimeTrait;

    #[ORM\Column(type: "time", unique: true, nullable: false)]
    protected DateTime $closingTime;
}
