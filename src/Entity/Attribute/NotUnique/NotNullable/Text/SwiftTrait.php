<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SwiftTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $swift;
}
