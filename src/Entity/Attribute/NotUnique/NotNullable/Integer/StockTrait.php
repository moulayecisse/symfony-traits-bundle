<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\StockTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $stock;
}
