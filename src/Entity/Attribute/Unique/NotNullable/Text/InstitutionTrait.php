<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait InstitutionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\InstitutionTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $institution;
}