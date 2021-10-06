<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LastNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LastNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $lastName;
}
