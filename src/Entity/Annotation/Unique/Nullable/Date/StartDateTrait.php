<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait StartDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\StartDateTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $startDate;
}
