<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\LatitudeTrait;

    /**
     * @ORM\Column(type="float", unique=false, nullable=false)
     */
    protected float $latitude;
}
