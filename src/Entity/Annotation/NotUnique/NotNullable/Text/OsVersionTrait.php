<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\OsVersionTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $osVersion;
}
