<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\DateTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=false)
     */
    protected DateTime $date;
}
