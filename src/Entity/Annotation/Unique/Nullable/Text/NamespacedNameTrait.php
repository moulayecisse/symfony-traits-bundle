<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NamespacedNameTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $namespacedName = null;
}
