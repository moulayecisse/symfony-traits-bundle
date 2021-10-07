<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\LocaleTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $locale = null;
}
