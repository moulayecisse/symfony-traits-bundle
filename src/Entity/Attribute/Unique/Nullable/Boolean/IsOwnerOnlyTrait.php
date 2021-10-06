<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsOwnerOnlyTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: true)]
    protected ?bool $isOwnerOnly;
}
