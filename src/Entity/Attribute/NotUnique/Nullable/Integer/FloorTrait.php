<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait FloorTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\FloorTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $floor = null;
}
