<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthdayTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\BirthdayTrait;

    /**
     * @ORM\Column(type="date", unique=false, nullable=true)
     */
    protected ?DateTime $birthday;
}
