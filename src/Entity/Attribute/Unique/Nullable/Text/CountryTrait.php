<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CountryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CountryTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $country;
}
