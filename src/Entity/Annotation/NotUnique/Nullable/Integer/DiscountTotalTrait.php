<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DiscountTotalTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $discountTotal;
}
