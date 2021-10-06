<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BiographyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BiographyTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $biography;
}
