<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OrderingTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\OrderingTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $ordering;
}
