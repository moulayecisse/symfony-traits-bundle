<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FullContentTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $fullContent;
}
