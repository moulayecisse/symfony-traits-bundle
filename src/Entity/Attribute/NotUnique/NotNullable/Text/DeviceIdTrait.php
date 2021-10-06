<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceIdTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $deviceId;
}
