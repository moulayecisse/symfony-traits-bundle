<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TypeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TypeTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $type;
}
