<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ContentTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $content;
}
