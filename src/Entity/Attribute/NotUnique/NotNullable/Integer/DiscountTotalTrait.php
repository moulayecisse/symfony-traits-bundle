<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\DiscountTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $discountTotal;
}
