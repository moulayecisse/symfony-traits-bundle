<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\SubTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $subTotal;
}
