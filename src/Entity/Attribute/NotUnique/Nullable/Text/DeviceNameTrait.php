<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\DeviceNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $deviceName = null;
}
