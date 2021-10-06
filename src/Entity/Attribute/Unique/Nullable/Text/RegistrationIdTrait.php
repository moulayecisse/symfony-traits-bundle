<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\RegistrationIdTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $registrationId;
}
