<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Arrays;

use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Arrays\TemplatesTrait;

    #[ORM\Column(type: "array", unique: false, nullable: false)]
    protected array $templates = [];
}
