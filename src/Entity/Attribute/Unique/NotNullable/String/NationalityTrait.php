<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait NationalityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\NationalityTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: false)]
    protected string $nationality;
}
