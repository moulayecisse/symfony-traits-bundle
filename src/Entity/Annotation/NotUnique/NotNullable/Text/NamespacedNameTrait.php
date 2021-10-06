<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NamespacedNameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $namespacedName;
}
