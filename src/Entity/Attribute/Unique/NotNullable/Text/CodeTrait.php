<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CodeTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $code;
}
