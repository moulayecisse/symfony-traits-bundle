<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\DateTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $date = null;
}
