<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\LocaleTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $locale;
}
