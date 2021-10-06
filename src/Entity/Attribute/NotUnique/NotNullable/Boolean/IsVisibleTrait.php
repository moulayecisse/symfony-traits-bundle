<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVisibleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsVisibleTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: false)]
    protected bool $isVisible;
}
