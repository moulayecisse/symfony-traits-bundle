<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait TokenExpireAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\TokenExpireAtTrait;

    #[ORM\Column(type: "datetime", unique: true, nullable: false)]
    protected DateTime $tokenExpireAt;
}
