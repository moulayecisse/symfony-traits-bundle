<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PlaceholderTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $placeholder;
}
