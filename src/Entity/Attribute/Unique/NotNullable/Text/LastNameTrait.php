<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LastNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LastNameTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $lastName;
}
