<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TokenTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $token;
}
