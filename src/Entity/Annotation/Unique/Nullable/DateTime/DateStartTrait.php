<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateStartTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\DateStartTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=true)
     */
    protected ?DateTime $dateStart = null;
}
