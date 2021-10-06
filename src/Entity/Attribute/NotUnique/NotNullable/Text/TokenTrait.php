<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $token;
}
