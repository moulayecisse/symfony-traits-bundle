<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait OpeningTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Time\OpeningTimeTrait;

    #[ORM\Column(type: "time", unique: false, nullable: true)]
    protected ?DateTime $openingTime;
}
