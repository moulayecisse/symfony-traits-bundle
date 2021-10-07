<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TaxTotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\TaxTotalTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $taxTotal = null;
}
