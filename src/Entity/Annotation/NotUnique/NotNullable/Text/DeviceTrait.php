<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DeviceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DeviceTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $device;
}
