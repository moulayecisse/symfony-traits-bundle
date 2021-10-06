<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OrderingTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\OrderingTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $ordering;
}
