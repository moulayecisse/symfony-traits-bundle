<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FirstNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FirstNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $firstName;
}
