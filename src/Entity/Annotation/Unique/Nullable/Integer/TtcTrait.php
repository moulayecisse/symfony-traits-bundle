<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TtcTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\TtcTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $ttc = null;
}
