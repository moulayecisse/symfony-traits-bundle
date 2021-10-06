<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BiographyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BiographyTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $biography;
}
