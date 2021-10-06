<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BirthPlaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BirthPlaceTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $birthPlace;
}
