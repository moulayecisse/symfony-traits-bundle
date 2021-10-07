<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsLocalTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isLocal = null;
}
