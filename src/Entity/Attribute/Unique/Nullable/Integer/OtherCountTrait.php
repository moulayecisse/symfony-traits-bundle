<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OtherCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\OtherCountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $otherCount = null;
}
