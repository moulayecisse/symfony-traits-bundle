<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\DiscountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $discount;
}
