<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\BirthDateTrait;

    #[ORM\Column(type: "date", unique: false, nullable: true)]
    protected ?DateTime $birthDate = null;
}
