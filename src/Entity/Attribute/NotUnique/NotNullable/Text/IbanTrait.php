<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IbanTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\IbanTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $iban;
}