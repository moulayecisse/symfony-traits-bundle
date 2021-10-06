<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\StockTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $stock;
}
