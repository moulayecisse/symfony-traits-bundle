<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsEnableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsEnableTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isEnable;
}
