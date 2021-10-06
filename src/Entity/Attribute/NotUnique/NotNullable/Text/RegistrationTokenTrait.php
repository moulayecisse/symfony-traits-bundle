<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RegistrationTokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $registrationToken;
}
