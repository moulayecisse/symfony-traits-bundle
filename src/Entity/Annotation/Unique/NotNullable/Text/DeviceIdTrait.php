<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceIdTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $deviceId;
}
