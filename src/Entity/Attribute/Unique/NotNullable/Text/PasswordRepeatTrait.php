<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PasswordRepeatTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PasswordRepeatTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $passwordRepeat;
}
