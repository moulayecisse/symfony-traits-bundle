<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\RibTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $rib = null;
}
