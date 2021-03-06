<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait MaximumAmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\MaximumAmountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $maximumAmount = null;
}
