<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait GenderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\GenderTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $gender;
}
