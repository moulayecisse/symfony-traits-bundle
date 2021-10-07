<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait QuantityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\QuantityTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $quantity;
}