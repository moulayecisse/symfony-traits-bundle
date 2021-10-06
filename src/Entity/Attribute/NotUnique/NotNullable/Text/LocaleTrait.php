<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LocaleTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $locale;
}
