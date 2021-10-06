<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CodeTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $code;
}
