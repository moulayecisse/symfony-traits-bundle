<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\DateTrait;

    #[ORM\Column(type: "date", unique: false, nullable: true)]
    protected ?DateTime $date;
}
