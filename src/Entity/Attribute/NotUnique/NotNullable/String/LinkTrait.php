<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LinkTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\LinkTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: false)]
    protected string $link;
}
