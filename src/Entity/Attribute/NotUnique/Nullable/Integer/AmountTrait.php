<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\AmountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $amount;
}
