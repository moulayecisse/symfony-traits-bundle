<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait StartDateTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\StartDateTimeTrait;

    #[ORM\Column(type: "datetime", unique: true, nullable: false)]
    protected DateTime $startDateTime;
}
