<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsEnableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsEnableTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: false)]
    protected bool $isEnable;
}
