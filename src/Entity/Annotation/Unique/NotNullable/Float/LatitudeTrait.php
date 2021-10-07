<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\LatitudeTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=false)
     */
    protected float $latitude;
}
