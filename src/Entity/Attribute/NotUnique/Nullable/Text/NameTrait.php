<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $name;
}
