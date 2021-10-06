<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NationalityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NationalityTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $nationality;
}
