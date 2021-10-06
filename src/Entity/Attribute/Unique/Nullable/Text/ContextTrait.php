<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ContextTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $context;
}
