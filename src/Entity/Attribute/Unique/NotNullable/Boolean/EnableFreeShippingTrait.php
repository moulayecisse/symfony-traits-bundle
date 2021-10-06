<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait EnableFreeShippingTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\EnableFreeShippingTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $enableFreeShipping;
}
