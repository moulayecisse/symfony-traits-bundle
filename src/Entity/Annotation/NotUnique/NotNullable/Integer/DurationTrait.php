<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DurationTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\DurationTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $duration;
}
