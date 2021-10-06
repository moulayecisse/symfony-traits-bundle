<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthdayTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\BirthdayTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=false)
     */
    protected DateTime $birthday;
}
