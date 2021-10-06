<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MinimumAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\MinimumAmountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $minimumAmount;
}
