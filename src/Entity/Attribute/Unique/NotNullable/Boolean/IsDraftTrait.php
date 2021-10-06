<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsDraftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsDraftTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isDraft;
}
