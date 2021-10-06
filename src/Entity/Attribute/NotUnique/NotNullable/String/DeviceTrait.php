<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait DeviceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\DeviceTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: false)]
    protected string $device;
}
