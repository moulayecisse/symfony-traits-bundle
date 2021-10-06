<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriorityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\PriorityTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $priority;
}
