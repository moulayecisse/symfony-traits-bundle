<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RegistrationIdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RegistrationIdTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $registrationId;
}
