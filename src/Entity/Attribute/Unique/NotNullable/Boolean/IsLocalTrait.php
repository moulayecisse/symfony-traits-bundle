<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsLocalTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isLocal;
}
