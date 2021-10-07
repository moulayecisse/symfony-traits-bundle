<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceDiscountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Decimal\PriceDiscountTrait;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, unique=true, nullable=true)
     */
    protected ?int $priceDiscount = null;
}
