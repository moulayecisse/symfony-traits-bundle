<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\VersionNameTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: true)]
    protected ?string $versionName;
}
