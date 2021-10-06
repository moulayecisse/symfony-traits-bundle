<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CityTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $city;
}
