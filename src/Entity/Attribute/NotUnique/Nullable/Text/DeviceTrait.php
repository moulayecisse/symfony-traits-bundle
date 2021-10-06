<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\DeviceTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $device;
}
