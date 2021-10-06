<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ExpiredAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\ExpiredAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=true)
     */
    protected ?DateTime $expiredAt;
}
