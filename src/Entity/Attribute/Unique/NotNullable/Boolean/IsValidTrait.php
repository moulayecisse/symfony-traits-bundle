<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsValidTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsValidTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isValid;
}
