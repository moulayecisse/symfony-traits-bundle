<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsActiveTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsActiveTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isActive = null;
}
