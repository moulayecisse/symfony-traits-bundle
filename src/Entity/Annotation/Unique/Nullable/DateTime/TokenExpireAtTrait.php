<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TokenExpireAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\TokenExpireAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=true)
     */
    protected ?DateTime $tokenExpireAt = null;
}
