<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait QuantityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\QuantityTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $quantity;
}
