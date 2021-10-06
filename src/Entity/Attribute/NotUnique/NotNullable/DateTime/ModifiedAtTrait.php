<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ModifiedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\ModifiedAtTrait;

    #[ORM\Column(type: "datetime", unique: false, nullable: false)]
    protected DateTime $modifiedAt;
}
