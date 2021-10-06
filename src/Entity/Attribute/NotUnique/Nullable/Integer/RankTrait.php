<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait RankTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\RankTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $rank;
}
