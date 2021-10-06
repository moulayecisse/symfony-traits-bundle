<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TtcTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\TtcTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $ttc;
}
