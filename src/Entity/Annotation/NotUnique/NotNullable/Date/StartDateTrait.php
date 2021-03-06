<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait StartDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\StartDateTrait;

    /**
     * @ORM\Column(type="date", unique=false, nullable=false)
     */
    protected DateTime $startDate;
}
