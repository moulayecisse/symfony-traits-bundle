<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PhoneNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PhoneNumberTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $phoneNumber;
}
