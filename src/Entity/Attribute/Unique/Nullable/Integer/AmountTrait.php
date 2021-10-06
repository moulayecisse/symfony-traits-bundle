<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\AmountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $amount;
}
