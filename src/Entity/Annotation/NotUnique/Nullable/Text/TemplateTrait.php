<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TemplateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TemplateTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $template;
}
