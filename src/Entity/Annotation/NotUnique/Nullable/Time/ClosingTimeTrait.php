<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Time;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ClosingTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Time\ClosingTimeTrait;

    /**
     * @ORM\Column(type="time", unique=false, nullable=true)
     */
    protected ?DateTime $closingTime;
}
