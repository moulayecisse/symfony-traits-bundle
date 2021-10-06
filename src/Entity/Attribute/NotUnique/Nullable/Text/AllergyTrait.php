<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AllergyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AllergyTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $allergy;
}
