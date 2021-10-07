<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TokenTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $token = null;
}