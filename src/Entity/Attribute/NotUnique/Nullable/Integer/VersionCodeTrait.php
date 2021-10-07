<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\VersionCodeTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $versionCode = null;
}