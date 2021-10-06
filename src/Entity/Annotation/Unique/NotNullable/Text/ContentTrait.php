<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ContentTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $content;
}
