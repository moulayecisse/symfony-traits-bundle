<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\StockStatusTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $stockStatus;
}
