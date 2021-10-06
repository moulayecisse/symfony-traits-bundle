<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\AddressTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: false)]
    protected string $address;
}
