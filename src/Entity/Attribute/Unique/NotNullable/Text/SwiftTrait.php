<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SwiftTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $swift;
}
