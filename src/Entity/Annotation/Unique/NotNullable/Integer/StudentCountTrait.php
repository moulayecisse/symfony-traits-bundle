<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\StudentCountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $studentCount;
}
