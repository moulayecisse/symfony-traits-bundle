<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Arrays;

use Doctrine\ORM\Mapping as ORM;

trait TemplatesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Arrays\TemplatesTrait;

    /**
     * @ORM\Column(type="array", unique=false, nullable=true)
     */
    protected ?array $templates = [];
}
