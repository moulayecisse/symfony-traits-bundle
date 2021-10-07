<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait NumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\NumberTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $number = null;
}
