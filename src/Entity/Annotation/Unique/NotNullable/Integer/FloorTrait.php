<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait FloorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\FloorTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $floor;
}
