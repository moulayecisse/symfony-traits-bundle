<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait NamespaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\NamespaceTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: false)]
    protected string $namespace;
}
