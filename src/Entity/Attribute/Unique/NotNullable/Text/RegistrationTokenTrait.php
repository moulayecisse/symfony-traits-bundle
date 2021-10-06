<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RegistrationTokenTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $registrationToken;
}
