<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\LatitudeTrait;

    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $latitude = null;
}
