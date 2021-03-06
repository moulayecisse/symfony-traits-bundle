<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait CountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\CountTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $count = null;
}
