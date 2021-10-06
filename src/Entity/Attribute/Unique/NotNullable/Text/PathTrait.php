<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PathTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PathTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $path;
}
