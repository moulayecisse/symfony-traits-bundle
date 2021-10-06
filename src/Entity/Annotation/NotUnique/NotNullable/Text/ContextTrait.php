<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ContextTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $context;
}
