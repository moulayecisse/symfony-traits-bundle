<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\OrderKeyTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $orderKey = null;
}
