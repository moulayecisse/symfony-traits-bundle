<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TextTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $text;
}
