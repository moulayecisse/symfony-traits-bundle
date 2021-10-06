<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsOwnerOnlyTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $isOwnerOnly;
}
