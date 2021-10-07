<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IsbnTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\IsbnTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $isbn = null;
}
