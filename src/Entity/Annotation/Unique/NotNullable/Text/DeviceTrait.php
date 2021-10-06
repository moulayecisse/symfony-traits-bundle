<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $device;
}
