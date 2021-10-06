<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Arrays;

use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Arrays\TemplatesTrait;

    #[ORM\Column(type: "array", unique: true, nullable: true)]
    protected ?array $templates = [];
}
