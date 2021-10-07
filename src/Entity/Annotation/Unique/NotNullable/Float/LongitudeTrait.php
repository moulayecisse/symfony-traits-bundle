<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\LongitudeTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=false)
     */
    protected float $longitude;
}
