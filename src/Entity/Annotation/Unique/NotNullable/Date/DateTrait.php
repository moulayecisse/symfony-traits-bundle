<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\DateTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=false)
     */
    protected DateTime $date;
}
