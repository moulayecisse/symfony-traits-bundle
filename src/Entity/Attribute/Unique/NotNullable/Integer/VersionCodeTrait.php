<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\VersionCodeTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $versionCode;
}