<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\EndDateTrait;

    /**
     * @ORM\Column(type="date", unique=true, nullable=true)
     */
    protected ?DateTime $endDate = null;
}
