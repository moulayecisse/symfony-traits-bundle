<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\DateTrait;

    /**
     * @ORM\Column(type="date", unique=false, nullable=false)
     */
    protected DateTime $date;
}
