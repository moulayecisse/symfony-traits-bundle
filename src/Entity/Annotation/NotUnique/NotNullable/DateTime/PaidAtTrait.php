<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait PaidAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\PaidAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=false, nullable=false)
     */
    protected DateTime $paidAt;
}
