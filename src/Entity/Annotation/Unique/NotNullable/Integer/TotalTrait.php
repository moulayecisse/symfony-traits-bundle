<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\TotalTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $total;
}
