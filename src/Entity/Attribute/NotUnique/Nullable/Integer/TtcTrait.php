<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TtcTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\TtcTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $ttc;
}
