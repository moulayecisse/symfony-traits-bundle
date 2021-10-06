<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NamespacedNameTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $namespacedName;
}
