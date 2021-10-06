<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriorityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\PriorityTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $priority;
}
