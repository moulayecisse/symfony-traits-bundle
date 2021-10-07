<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ExtensionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ExtensionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $extension;
}