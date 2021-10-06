<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DiscountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $discount;
}
