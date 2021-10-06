<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\EndDateTimeTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=false)
     */
    protected DateTime $endDateTime;
}
