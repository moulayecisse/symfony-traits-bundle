<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NamespacedNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NamespacedNameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $namespacedName = null;
}
