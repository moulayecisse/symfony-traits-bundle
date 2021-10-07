<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsIndividualTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isIndividual = null;
}
