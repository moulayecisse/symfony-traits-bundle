<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait NumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\NumberTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $number;
}
