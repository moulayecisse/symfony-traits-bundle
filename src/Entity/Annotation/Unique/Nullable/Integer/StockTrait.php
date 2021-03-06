<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StockTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\StockTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $stock = null;
}
