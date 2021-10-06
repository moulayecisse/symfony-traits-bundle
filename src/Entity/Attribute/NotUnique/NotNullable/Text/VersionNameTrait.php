<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\VersionNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $versionName;
}
