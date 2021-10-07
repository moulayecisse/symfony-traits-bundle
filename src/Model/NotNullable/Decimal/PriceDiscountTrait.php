<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Decimal;

trait PriceDiscountTrait
{
    protected int $priceDiscount;

    public function getPriceDiscount(): int
    {
        return $this->priceDiscount;
    }

    public function setPriceDiscount(int $priceDiscount): self
    {
        $this->priceDiscount = $priceDiscount;

        return $this;
    }
}
