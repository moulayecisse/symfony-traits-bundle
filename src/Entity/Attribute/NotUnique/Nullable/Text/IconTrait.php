<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\IconTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $icon = null;
}
