<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\ShippingTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $shippingTotal = null;
}