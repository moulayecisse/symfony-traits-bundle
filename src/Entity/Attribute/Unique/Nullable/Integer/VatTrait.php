<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\VatTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $vat = null;
}
