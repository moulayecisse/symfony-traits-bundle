<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\StockStatusTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $stockStatus;
}
