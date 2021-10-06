<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceNameTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $deviceName;
}
