<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait QuantityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\QuantityTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $quantity = null;
}