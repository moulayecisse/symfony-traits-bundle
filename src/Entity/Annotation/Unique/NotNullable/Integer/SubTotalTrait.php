<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\SubTotalTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $subTotal;
}
