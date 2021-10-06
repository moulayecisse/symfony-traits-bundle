<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ReturnDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Date\ReturnDateTrait;

    #[ORM\Column(type: "date", unique: true, nullable: false)]
    protected DateTime $returnDate;
}
