<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait DeviceIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\DeviceIdTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: false)]
    protected string $deviceId;
}
