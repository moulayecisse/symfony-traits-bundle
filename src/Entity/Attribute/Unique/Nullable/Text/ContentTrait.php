<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ContentTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $content = null;
}
