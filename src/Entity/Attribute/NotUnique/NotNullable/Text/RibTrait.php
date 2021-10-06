<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RibTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $rib;
}
