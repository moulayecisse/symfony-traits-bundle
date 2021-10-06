<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVerifiedTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsVerifiedTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $isVerified;
}
