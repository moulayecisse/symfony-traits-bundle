<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait PhoneNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\PhoneNumberTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $phoneNumber;
}
