<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait NumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\NumberTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $number;
}
