<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MaximumAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\MaximumAmountTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $maximumAmount;
}
