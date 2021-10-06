<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RegistrationIdTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $registrationId;
}
