<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait CodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\CodeTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: false)]
    protected string $code;
}
