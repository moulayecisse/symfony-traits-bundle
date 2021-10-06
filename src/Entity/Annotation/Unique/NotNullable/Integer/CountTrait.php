<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait CountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\CountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $count;
}
