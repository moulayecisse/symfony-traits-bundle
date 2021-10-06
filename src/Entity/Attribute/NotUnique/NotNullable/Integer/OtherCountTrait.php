<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\OtherCountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $otherCount;
}
