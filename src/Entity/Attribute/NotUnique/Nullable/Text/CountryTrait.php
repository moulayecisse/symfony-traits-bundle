<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CountryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CountryTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $country;
}
