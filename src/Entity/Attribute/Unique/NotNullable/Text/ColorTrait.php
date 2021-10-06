<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ColorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ColorTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $color;
}
