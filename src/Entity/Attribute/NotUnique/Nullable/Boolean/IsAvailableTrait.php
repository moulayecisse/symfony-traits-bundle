<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsAvailableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsAvailableTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isAvailable = null;
}
