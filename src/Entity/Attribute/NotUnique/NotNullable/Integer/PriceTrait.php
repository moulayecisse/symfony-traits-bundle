<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\PriceTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $price;
}
