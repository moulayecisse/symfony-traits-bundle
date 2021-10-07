<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\EndDateTrait;

    /**
     * @ORM\Column(type="date", unique=false, nullable=true)
     */
    protected ?DateTime $endDate = null;
}
