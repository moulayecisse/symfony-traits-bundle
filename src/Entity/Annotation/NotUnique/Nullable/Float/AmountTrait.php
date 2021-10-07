<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\AmountTrait;

    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $amount = null;
}
