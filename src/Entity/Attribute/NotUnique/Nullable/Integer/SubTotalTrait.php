<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\SubTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $subTotal = null;
}
