<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsOwnerOnlyTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isOwnerOnly;
}
