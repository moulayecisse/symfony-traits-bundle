<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NamespaceTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $namespace = null;
}