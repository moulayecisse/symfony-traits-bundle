<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AppVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AppVersionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $appVersion;
}
