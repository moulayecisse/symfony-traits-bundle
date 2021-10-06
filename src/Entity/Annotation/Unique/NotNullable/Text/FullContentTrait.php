<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FullContentTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $fullContent;
}
