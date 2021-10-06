<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsLocalTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isLocal;
}
