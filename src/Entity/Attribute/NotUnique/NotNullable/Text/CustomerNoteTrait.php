<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CustomerNoteTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CustomerNoteTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $customerNote;
}
