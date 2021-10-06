<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait UsernameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\UsernameTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $username;
}
