<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NamespaceTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $namespace;
}
