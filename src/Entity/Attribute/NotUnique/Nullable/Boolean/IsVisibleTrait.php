<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVisibleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsVisibleTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isVisible;
}
