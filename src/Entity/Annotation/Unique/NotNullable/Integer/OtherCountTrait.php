<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\OtherCountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $otherCount;
}
