<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BirthPlaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BirthPlaceTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $birthPlace = null;
}