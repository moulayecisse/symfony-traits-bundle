<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ContentTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $content;
}
