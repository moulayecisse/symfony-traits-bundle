<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MinimumAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\MinimumAmountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $minimumAmount = null;
}