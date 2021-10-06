<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait OpeningTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Time\OpeningTimeTrait;

    #[ORM\Column(type: "time", unique: false, nullable: false)]
    protected DateTime $openingTime;
}
