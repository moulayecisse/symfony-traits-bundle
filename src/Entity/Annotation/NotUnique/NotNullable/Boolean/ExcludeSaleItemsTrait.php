<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait ExcludeSaleItemsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\ExcludeSaleItemsTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $excludeSaleItems;
}
