<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PathTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\PathTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $path;
}
