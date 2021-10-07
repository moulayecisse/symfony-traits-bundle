<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait SubTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\SubTotalTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $subTotal = null;
}
