<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\AmountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $amount;
}