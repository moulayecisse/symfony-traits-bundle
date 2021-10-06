<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait EnableFreeShippingTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\EnableFreeShippingTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $enableFreeShipping;
}
