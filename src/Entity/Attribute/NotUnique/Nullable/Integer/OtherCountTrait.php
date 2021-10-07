<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\OtherCountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $otherCount = null;
}
