<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait FloorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\FloorTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $floor;
}
