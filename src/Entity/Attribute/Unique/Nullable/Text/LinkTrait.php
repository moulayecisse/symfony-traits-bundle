<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LinkTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\LinkTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $link;
}
