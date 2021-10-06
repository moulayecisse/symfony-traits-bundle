<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsEnableTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsEnableTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $isEnable;
}
