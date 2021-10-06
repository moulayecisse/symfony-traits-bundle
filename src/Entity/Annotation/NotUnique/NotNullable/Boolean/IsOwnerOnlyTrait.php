<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsOwnerOnlyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsOwnerOnlyTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isOwnerOnly;
}
