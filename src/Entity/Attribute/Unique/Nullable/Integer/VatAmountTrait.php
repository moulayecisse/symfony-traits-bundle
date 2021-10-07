<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\VatAmountTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $vatAmount = null;
}
