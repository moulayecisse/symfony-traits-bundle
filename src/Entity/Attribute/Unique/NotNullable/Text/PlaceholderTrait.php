<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PlaceholderTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $placeholder;
}
