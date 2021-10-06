<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\VatAmountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $vatAmount;
}
