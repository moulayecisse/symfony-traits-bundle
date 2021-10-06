<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ZipCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ZipCodeTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $zipCode;
}
