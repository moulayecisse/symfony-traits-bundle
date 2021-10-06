<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\ShippingTotalTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $shippingTotal;
}
