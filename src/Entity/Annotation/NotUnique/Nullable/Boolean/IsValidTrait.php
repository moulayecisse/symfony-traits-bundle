<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsValidTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsValidTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $isValid = null;
}
