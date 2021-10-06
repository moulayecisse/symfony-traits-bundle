<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsAvailableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsAvailableTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isAvailable;
}
