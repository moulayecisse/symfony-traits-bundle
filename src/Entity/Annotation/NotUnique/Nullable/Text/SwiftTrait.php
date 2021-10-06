<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SwiftTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $swift;
}
