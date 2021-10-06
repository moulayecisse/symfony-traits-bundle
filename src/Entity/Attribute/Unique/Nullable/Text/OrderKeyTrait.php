<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\OrderKeyTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $orderKey;
}
