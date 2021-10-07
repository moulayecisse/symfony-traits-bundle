<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait InstitutionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\InstitutionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $institution = null;
}
