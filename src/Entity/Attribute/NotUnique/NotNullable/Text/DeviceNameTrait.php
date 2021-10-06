<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $deviceName;
}
