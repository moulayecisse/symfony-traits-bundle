<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MinimumAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\MinimumAmountTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $minimumAmount;
}
