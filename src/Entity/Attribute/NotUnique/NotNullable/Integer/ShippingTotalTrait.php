<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\ShippingTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $shippingTotal;
}
