<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FileTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\FileTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $file;
}
