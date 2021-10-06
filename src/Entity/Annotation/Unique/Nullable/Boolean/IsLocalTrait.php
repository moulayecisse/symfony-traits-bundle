<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsLocalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsLocalTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isLocal;
}
