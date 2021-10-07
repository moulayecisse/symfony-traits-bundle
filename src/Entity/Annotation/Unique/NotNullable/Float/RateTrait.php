<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\RateTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=false)
     */
    protected float $rate;
}
