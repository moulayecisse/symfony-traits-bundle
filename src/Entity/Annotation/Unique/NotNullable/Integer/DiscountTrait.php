<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\DiscountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $discount;
}
