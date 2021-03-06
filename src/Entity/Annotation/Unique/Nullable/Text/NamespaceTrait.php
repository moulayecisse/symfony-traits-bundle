<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NamespaceTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $namespace = null;
}
