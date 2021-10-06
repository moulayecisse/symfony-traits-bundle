<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NamespaceTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $namespace;
}
