<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\ShippingTotalTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $shippingTotal = null;
}
