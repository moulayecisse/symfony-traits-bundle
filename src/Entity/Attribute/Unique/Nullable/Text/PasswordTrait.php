<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PasswordTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\PasswordTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $password = null;
}
