<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\EndDateTrait;

    #[ORM\Column(type: "date", unique: false, nullable: false)]
    protected DateTime $endDate;
}
