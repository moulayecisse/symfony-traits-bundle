<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TemplateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TemplateTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $template = null;
}
