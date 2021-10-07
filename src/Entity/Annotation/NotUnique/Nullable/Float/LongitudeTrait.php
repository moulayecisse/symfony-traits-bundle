<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\LongitudeTrait;

    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $longitude = null;
}
