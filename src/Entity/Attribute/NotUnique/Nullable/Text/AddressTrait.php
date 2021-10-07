<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AddressTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $address = null;
}
