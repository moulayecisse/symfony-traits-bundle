<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VatTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\VatTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $vat;
}
