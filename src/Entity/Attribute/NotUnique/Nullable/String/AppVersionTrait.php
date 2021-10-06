<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait AppVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\AppVersionTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: true)]
    protected ?string $appVersion;
}
