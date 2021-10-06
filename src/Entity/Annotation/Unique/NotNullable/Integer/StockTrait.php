<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\StockTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $stock;
}
