<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait MessageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\MessageTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $message = null;
}
