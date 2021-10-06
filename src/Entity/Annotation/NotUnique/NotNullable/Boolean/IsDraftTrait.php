<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsDraftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsDraftTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isDraft;
}
