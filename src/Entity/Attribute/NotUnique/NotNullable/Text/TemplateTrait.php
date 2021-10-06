<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TemplateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TemplateTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $template;
}
