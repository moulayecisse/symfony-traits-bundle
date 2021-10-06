<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CountryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CountryTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $country;
}
