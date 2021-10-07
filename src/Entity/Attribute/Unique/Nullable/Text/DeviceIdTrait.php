<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\DeviceIdTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $deviceId = null;
}
