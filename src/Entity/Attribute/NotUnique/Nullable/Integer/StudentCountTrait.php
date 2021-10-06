<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\StudentCountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $studentCount;
}
