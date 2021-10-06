<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsIdTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: true)]
    protected ?bool $isId;
}
