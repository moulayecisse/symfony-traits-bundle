<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\PriceTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $price;
}
