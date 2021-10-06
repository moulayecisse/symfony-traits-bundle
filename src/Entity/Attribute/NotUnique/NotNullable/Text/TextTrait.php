<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TextTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $text;
}
