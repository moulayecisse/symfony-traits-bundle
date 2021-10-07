<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ExtensionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ExtensionTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $extension = null;
}