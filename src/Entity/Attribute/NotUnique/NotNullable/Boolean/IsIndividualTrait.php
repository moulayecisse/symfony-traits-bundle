<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsIndividualTrait;

    #[ORM\Column(type: "boolean", unique: false, nullable: false)]
    protected bool $isIndividual;
}
