<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\TotalTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $total = null;
}
