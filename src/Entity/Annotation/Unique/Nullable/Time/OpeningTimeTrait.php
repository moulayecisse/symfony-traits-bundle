<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait OpeningTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Time\OpeningTimeTrait;

    /**
     * @ORM\Column(type="time", unique=true, nullable=true)
     */
    protected ?DateTime $openingTime;
}
