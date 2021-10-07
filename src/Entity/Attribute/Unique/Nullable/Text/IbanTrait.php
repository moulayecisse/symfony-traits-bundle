<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IbanTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\IbanTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $iban = null;
}
