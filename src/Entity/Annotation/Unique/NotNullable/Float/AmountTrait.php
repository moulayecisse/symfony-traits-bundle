<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\AmountTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=false)
     */
    protected float $amount;
}
