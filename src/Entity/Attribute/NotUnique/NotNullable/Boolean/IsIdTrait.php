<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsIdTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: false)]
    protected bool $isId;
}
