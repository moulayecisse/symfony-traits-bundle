<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\StockStatusTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: false)]
    protected string $stockStatus;
}
