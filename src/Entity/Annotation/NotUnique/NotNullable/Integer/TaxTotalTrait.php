<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\TaxTotalTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $taxTotal;
}
