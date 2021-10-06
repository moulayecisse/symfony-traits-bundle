<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsIndividualTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsIndividualTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isIndividual;
}
