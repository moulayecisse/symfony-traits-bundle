<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\TaxTotalTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $taxTotal;
}
