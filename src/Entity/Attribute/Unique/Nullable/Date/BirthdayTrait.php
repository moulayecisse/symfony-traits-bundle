<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthdayTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\BirthdayTrait;

    #[ORM\Column(type: "date", unique: true, nullable: true)]
    protected ?DateTime $birthday = null;
}
