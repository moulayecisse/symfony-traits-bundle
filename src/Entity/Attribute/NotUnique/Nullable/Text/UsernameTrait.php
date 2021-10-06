<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait UsernameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\UsernameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $username;
}
