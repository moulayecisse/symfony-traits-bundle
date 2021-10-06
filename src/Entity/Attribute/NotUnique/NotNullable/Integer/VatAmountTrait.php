<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\VatAmountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $vatAmount;
}
