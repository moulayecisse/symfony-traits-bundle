<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FileTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\FileTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $file = null;
}
