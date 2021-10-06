<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LabelTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LabelTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $label;
}
