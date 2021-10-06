<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsActiveTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsActiveTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isActive;
}
