<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsIndividualTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: true)]
    protected ?bool $isIndividual;
}
