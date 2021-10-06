<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVerifiedTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsVerifiedTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isVerified;
}
