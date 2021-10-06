<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TemplateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TemplateTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $template;
}
