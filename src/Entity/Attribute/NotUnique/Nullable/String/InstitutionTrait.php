<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait InstitutionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\InstitutionTrait;

    #[ORM\Column(type: "string", length: 255, unique: false, nullable: true)]
    protected ?string $institution;
}
