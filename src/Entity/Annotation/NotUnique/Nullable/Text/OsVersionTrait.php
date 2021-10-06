<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\OsVersionTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $osVersion;
}
