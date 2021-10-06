<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait NumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\NumberTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $number;
}
