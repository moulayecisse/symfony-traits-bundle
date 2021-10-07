<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ColorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ColorTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $color = null;
}
