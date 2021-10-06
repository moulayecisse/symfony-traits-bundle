<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AppVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\AppVersionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $appVersion;
}
