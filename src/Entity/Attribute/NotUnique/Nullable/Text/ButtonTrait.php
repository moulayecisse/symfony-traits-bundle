<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ButtonTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ButtonTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $button;
}
