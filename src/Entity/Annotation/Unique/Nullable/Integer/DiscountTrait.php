<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DiscountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DiscountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $discount;
}
