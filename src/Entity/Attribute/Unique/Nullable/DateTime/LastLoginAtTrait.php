<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait LastLoginAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\LastLoginAtTrait;

    #[ORM\Column(type: "datetime", unique: true, nullable: true)]
    protected ?DateTime $lastLoginAt = null;
}
