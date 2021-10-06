<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\StudentCountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $studentCount;
}
