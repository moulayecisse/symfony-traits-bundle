<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait ExcludeSaleItemsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\ExcludeSaleItemsTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $excludeSaleItems;
}
