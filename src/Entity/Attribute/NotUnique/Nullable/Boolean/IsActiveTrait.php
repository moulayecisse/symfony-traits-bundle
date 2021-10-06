<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsActiveTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsActiveTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isActive;
}
