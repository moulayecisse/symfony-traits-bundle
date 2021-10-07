<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\RegistrationTokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $registrationToken = null;
}
