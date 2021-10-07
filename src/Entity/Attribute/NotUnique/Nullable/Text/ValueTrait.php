<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ValueTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $value = null;
}
