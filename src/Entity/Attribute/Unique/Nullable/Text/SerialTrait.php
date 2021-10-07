<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SerialTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SerialTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $serial = null;
}
