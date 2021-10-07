<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PhoneNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\PhoneNumberTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $phoneNumber = null;
}
