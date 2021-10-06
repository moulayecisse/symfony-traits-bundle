<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsReadTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsReadTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isRead;
}
