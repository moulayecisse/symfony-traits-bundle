<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TextTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $text;
}
