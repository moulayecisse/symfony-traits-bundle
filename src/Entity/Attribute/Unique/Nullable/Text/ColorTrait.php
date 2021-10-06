<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ColorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ColorTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $color;
}
