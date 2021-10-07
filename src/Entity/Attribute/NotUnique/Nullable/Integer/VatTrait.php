<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\VatTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $vat = null;
}
