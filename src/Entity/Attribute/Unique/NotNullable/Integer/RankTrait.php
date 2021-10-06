<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait RankTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\RankTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $rank;
}
