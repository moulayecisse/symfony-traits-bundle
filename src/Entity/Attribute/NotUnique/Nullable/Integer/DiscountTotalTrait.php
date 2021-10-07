<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DiscountTotalTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $discountTotal = null;
}