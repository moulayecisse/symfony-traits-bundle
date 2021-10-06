<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Arrays;

use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Arrays\TemplatesTrait;

    /**
     * @ORM\Column(type="array", unique=true, nullable=false)
     */
    protected array $templates = [];
}
