<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\VatAmountTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $vatAmount = null;
}
