<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $token;
}
