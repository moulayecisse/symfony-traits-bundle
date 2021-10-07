<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait RankTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\RankTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $rank = null;
}
