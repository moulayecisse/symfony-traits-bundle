<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsReadTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsReadTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=true)
     */
    protected ?bool $isRead;
}
