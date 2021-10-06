<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ModifiedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\ModifiedAtTrait;

    #[ORM\Column(type: "datetime", unique: true, nullable: false)]
    protected DateTime $modifiedAt;
}
