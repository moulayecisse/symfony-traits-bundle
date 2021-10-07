<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait BirthDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\BirthDateTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $birthDate = null;
}
