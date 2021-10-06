<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsAvailableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsAvailableTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isAvailable;
}
