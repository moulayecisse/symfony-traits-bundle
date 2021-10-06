<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OsVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\OsVersionTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $osVersion;
}
