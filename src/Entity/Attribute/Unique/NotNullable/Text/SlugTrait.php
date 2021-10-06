<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SlugTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SlugTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $slug;
}
