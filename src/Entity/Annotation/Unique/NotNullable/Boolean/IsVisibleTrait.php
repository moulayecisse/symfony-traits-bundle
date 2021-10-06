<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVisibleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsVisibleTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $isVisible;
}
