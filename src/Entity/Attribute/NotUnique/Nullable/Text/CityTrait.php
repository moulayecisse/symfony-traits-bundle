<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CityTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $city = null;
}
