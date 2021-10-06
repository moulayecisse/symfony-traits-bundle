<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FullNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $fullName;
}
