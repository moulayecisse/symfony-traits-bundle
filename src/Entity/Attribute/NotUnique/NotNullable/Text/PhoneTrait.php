<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PhoneTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $phone;
}
