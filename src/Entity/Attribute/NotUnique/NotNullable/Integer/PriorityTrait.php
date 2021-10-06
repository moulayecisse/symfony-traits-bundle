<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriorityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\PriorityTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $priority;
}
