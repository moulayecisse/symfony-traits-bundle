<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait SerialTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\SerialTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected ?string $serial = null;
}
