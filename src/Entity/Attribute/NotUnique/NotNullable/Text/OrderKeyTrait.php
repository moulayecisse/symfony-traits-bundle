<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\OrderKeyTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $orderKey;
}
