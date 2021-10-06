<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PasswordRepeatTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PasswordRepeatTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $passwordRepeat;
}
