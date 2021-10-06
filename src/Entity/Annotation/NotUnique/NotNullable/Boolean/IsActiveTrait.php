<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsActiveTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsActiveTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isActive;
}
