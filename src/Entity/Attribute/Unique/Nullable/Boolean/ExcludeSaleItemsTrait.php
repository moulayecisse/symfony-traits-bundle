<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait ExcludeSaleItemsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\ExcludeSaleItemsTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: true)]
    protected ?bool $excludeSaleItems;
}
