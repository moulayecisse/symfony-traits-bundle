<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsVerifiedTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsVerifiedTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $isVerified;
}
