<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait RankTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\RankTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $rank;
}
