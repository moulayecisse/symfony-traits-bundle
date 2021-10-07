<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait DeviceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\DeviceTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected ?string $device = null;
}
